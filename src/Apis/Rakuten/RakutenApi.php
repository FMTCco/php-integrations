<?php

namespace FMTCco\Integrations\Apis\Rakuten;


use FMTCco\Integrations\Apis\Rakuten\Requests\GetIndividualItemReport;
use FMTCco\Integrations\Apis\Rakuten\Requests\GetSalesAndActivityReport;
use FMTCco\Integrations\Apis\Rakuten\Responses\GetIndividualItemReportResponse;
use FMTCco\Integrations\Apis\Rakuten\Responses\GetSalesActivityReportResponse;
use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use FMTCco\Integrations\Exceptions\InvalidNetworkDateRangeException;
use FMTCco\Integrations\Exceptions\NetworkThrottledException;
use FMTCco\Integrations\Exceptions\UnknownNetworkException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class RakutenApi
{

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $base_url             = 'https://ran-reporting.rakutenmarketing.com/en/';

    /**
     * @var Client
     */
    public $client;

    /**
     * RakutenApi constructor.
     * @param   string      $token
     */
    public function __construct($token)
    {
        $this->token                = $token;
        $this->client               = new Client();
    }


    /**
     * @param   GetIndividualItemReport|array $request
     * @return  GetIndividualItemReportResponse|array|string
     */
    public function getIndividualItemReport($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $request['include_summary'] = 'N';
        $resource                   = 'reports/individual-item-report/filters';
        $result                     = $this->makeHttpRequest('GET', $resource, $request);
        $result                     = $this->cleanReportCsv($result);
        $result                     = new GetIndividualItemReportResponse($result);

        return $result;
    }

    /**
     * @param   GetSalesAndActivityReport|array $request
     * @return  GetSalesActivityReportResponse
     */
    public function getSalesAndActivityReport($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $request['include_summary'] = 'N';
        $resource                   = 'reports/sales-and-activity-report/filters';

        $result                     = $this->makeHttpRequest('GET', $resource, $request);
        $result                     = $this->cleanReportCsv($result);
        $result                     = new GetSalesActivityReportResponse($result);

        return $result;
    }

    /**
     * @param   string      $method
     * @param   string      $resource
     * @param   array       $query
     * @throws  InvalidNetworkCredentialsException
     * @throws  NetworkThrottledException
     * @throws  InvalidNetworkDateRangeException
     * @throws  UnknownNetworkException
     * @return  string
     */
    public function makeHttpRequest($method, $resource, $query = [])
    {
        $url                        = $this->base_url . $resource;
        $query['token']             = $this->token;

        $data                       = [
            'query'                 => $query,
        ];

        try {
            $response                   = $this->client->request($method, $url, $data);
            $contents                   = $response->getBody()->getContents();

            return $contents;
        } catch (ClientException $exception) {
            $error_code                 = $exception->getCode();
            $error_message              = json_decode($exception->getResponse()->getBody()->getContents(), true);
            $error_message              = $error_message['errors'][0];


            if ($error_code == 403) {
                throw new InvalidNetworkCredentialsException('Invalid Rakuten API token');
            } else if ($error_code == 429) {
                throw new NetworkThrottledException('Rakuten API token is being throttled');
            } else if (preg_match("/Invalid date range/", $error_message)) {
                throw new InvalidNetworkDateRangeException($error_message);
            } else {
                throw new UnknownNetworkException($error_message, $error_code);
            }
        }
    }

    /**
     * Clean the lousy data that is returned from the API so we can parse it
     * @param   string      $result
     * @return  array
     */
    private function cleanReportCsv($result)
    {
        $result                     = str_replace(["\r"], '', $result);   //  The API returns \r\n for whatever reason
        $lines                      = explode(PHP_EOL, $result);            //  explode the lines so we can remove the headers

        if (empty($lines[sizeof($lines) - 1])) {       // This line can be empty. Unset it if that's the case
            unset($lines[sizeof($lines) - 1]);
        }

        $header                     = explode(',', $lines[0]);
        if ($header[0] == '﻿Order ID') {
            $header[0] = 'Order ID';
        } else if ($header[0] == '﻿MID') {
            $header[0] = 'MID';
        }

        $lines[0]                   = implode(',', $header);

        //  Map the CSV to an associative array
        $csv                        = array_map("str_getcsv", $lines);
        $keys                       = array_shift($csv);

        foreach ($csv as $i => $row) {
            $csv[$i] = array_combine($keys, $row);
        }

        return $csv;
    }
}
