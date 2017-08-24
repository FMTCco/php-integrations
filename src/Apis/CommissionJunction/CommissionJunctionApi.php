<?php

namespace FMTCco\Integrations\Apis\CommissionJunction;

use FMTCco\Integrations\Apis\CommissionJunction\Requests\GetAdvertisers;
use FMTCco\Integrations\Apis\CommissionJunction\Requests\GetCommissions;
use FMTCco\Integrations\Apis\CommissionJunction\Responses\GetAdvertisersResponse;
use FMTCco\Integrations\Apis\CommissionJunction\Responses\GetCommissionsResponse;
use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use FMTCco\Integrations\Exceptions\InvalidNetworkDateRangeException;
use \GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class CommissionJunctionApi
{

    /**
     * @var string
     */
    protected $version  = 'v3';
    /**
     * @var string
     */
    protected $base_url = 'https://commission-detail.api.cj.com/';

    /**
     * @var string
     */
    protected $api_key;

    /**
     * @var Client
     */
    public $client;


    public function __construct($api_key)
    {
        $this->api_key              = $api_key;
        $this->client               = new Client();
    }

    /**
     * @param   GetAdvertisers|array $request
     * @return  GetAdvertisersResponse
     */
    public function getAdvertisers ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'advertiser-lookup', $request);

        $response                   = new GetAdvertisersResponse($result);
        $response->clean();
        return $response;
    }

    /**
     * @param   GetCommissions|array    $request
     * @return  GetCommissionsResponse
     */
    public function getCommissions($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'commissions', $request);
        $response                   = new GetCommissionsResponse($result);
        $response->clean();
        return $response;
    }

    /**
     * @param   string      $method
     * @param   string      $resource
     * @param   array       $query
     * @throws  InvalidNetworkCredentialsException
     * @throws  InvalidNetworkDateRangeException
     * @return  array
     */
    public function makeHttpRequest($method, $resource, $query = [])
    {
        $url                        = $this->base_url . $this->version . '/' . $resource;

        $data       = [
            'headers'               => ['authorization'     => $this->api_key],
            'query'                 => $query,
        ];

        try {
            $response                   = $this->client->request($method, $url, $data);
            $xml                        = $response->getBody()->getContents();
            return json_decode(json_encode((array)simplexml_load_string($xml)), true);
        } catch (ClientException $exception) {
            $errorMessage               = $exception->getMessage();

            if ($exception->getCode() == 401) {
                throw new InvalidNetworkCredentialsException('Invalid Commission Junction api_key');
            } else if (preg_match("/Invalid date interval/", $errorMessage)) {
                throw new InvalidNetworkDateRangeException('Invalid date interval: only 1 to 31 days period is allowed');
            } else {
                throw $exception;
            }
        }
    }
}
