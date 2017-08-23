<?php

namespace FMTCco\Integrations\Apis\PepperJam;


use FMTCco\Integrations\Apis\PepperJam\Requests\GetAdvertisers;
use FMTCco\Integrations\Apis\PepperJam\Requests\GetTransactionDetails;
use FMTCco\Integrations\Apis\PepperJam\Requests\GetTransactionSummary;
use FMTCco\Integrations\Apis\PepperJam\Responses\AdvertisersResponse;
use FMTCco\Integrations\Apis\PepperJam\Responses\TransactionDetailResponse;
use FMTCco\Integrations\Apis\PepperJam\Responses\TransactionSummaryResponse;
use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use FMTCco\Integrations\Exceptions\InvalidNetworkDateRangeException;
use FMTCco\Integrations\Exceptions\RequiredNetworkFieldMissingException;
use FMTCco\Integrations\Exceptions\UnknownNetworkException;
use \GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class PepperJamApi
{

    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $base_url = 'https://api.pepperjamnetwork.com/';

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * The format the response will be returned in.
     * One of: json, xml, or csv
     *
     * @var string
     */
    protected $format;

    /**
     * @var Client
     */
    public $client;


    /**
     * PepperJamApi constructor.
     * @param string    $apiKey
     * @param string    $format
     * @param string    $version
     */
    public function __construct($apiKey, $format = 'json', $version = '20120402')
    {
        $this->apiKey               = $apiKey;
        $this->format               = $format;
        $this->version              = $version;
        $this->client               = new Client();
    }

    /**
     * @param   GetAdvertisers|array $request
     * @return  AdvertisersResponse
     */
    public function getAdvertisers ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'publisher/advertiser', $request);

        $response                   = new AdvertisersResponse($result);
        return $response;
    }

    /**
     * @param   GetTransactionSummary|array $request
     * @return  TransactionSummaryResponse
     */
    public function getTransactionSummary($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'publisher/report/transaction-summary', $request);

        $response                   = new TransactionSummaryResponse($result);
        $response->clean();
        return $response;
    }

    /**
     * @param   GetTransactionDetails|array $request
     * @return  TransactionDetailResponse
     */
    public function getTransactionDetails($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'publisher/report/transaction-details', $request);

        $response                   = new TransactionDetailResponse($result);
        $response->clean();
        return $response;
    }

    public function makeHttpRequest($method, $resource, $query = [])
    {
        $url                        = $this->base_url . $this->version . '/' . $resource;
        $query['apiKey']            = $this->apiKey;
        $query['format']            = $this->format;

        try {
            $response               = $this->client->request($method, $url, [
                'query'             => $query,
            ]);
            $json                   = json_decode($response->getBody()->getContents(), true);
            return $json;
        } catch (ClientException $exception) {
            $message                = explode('response:' . PHP_EOL, $exception->getMessage());
            $message                = str_replace(PHP_EOL, '', $message[1]);
            $json                   = json_decode($message, true);
            $errorMessage           = $json['meta']['status']['message'];

            if ($exception->getCode() == 401) {
                throw new InvalidNetworkCredentialsException('Invalid Pepperjam apiKey');
            } else if (preg_match("/must be set/", $errorMessage)) {
                throw new RequiredNetworkFieldMissingException($errorMessage);
            } else if (preg_match("/Date range limited to 1 year/", $errorMessage)) {
                throw new InvalidNetworkDateRangeException($errorMessage);
            } else {
                throw new UnknownNetworkException($errorMessage);
            }
        }
    }
}
