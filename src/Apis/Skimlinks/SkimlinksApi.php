<?php

namespace FMTCco\Integrations\Apis\Skimlinks;


use FMTCco\Integrations\Apis\Skimlinks\Requests\GetCommissions;
use FMTCco\Integrations\Apis\Skimlinks\Requests\GetReportMerchants;
use FMTCco\Integrations\Apis\Skimlinks\Responses\GetCommissionsHistoryResponse;
use FMTCco\Integrations\Apis\Skimlinks\Requests\GetCommissionsHistory;
use FMTCco\Integrations\Apis\Skimlinks\Responses\GetCommissionsResponse;
use FMTCco\Integrations\Apis\Skimlinks\Responses\GetReportMerchantsResponse;
use FMTCco\Integrations\Exceptions\UnknownNetworkException;
use \GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class SkimlinksApi
{

    /**
     * @var string
     */
    protected $public_api_key;

    /**
     * @var string
     */
    protected $private_api_key;

    /**
     * @var string
     */
    protected $baseUrl              = 'https://api-reports.skimlinks.com';

    /**
     * @var string
     */
    protected $version;

    /**
     * @var Client
     */
    protected $client;


    /**
     * SkimlinksApi constructor.
     * @param   string      $public_api_key
     * @param   string      $private_api_key
     * @param   string      $version
     */
    public function __construct($public_api_key, $private_api_key, $version = '0.5')
    {
        $this->public_api_key       = $public_api_key;
        $this->private_api_key      = $private_api_key;
        $this->version              = $version;
        $this->client               = new Client();
    }

    /**
     * @see     https://api-reports.skimlinks.com/doc/#reportmerchants
     * @param   GetReportMerchants|array $request
     * @return  GetReportMerchantsResponse
     */
    public function getReportMerchants ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', '/publisher/reportmerchants', $request);
        $response                   = new GetReportMerchantsResponse($result['skimlinksAccount']);

        return $response;
    }

    /**
     * @see     https://api-reports.skimlinks.com/doc/#reportcommissions
     * @param   GetCommissions|array $request
     * @return  GetCommissionsResponse
     */
    public function getCommissions ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', '/publisher/reportcommissions', $request);
        $response                   = new GetCommissionsResponse($result['skimlinksAccount']);

        return $response;
    }

    /**
     * @see     https://api-reports.skimlinks.com/doc/#reportcommissionshistory
     * @param   GetCommissionsHistory|array    $request
     * @return  GetCommissionsHistoryResponse
     */
    public function getCommissionsHistory ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', '/publisher/reportcommissionshistory', $request);
        $response                   = new GetCommissionsHistoryResponse($result['skimlinksAccount']);

        return $response;
    }

    public function makeHttpRequest($method, $resource, $query = [])
    {
        $url                        = $this->baseUrl . $resource;

        $timestamp                  = gmdate(DATE_ISO8601);
        $authtoken                  = md5($timestamp . $this->private_api_key);

        $query['timestamp']         = $timestamp;
        $query['authtoken']         = $authtoken;
        $query['apikey']            = $this->public_api_key;
        $query['version']           = $this->version;

        try
        {
            $response               = $this->client->request($method, $url, [
                'query'             => $query,
            ]);

            $jsonString             = $response->getBody()->getContents();
            $json                   = json_decode($jsonString, true);
            return $json;
        }
        catch (ClientException $exception) {
            $code                   = $exception->getCode();
            $message                = $exception->getResponse()->getBody()->getContents();
            dd($message);
            throw new UnknownNetworkException($exception->getMessage());
        }
    }
}