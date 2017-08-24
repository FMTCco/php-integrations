<?php

namespace FMTCco\Integrations\Apis\ImpactRadius;


use FMTCco\Integrations\Apis\ImpactRadius\Requests\GetActions;
use FMTCco\Integrations\Apis\ImpactRadius\Requests\GetCampaigns;
use FMTCco\Integrations\Apis\ImpactRadius\Responses\GetActionsResponse;
use FMTCco\Integrations\Apis\ImpactRadius\Responses\GetCampaignsResponse;
use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use \GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ImpactRadiusApi
{

    /**
     * @var string
     */
    protected $account_sid;

    /**
     * @var string
     */
    protected $auth_token;

    /**
     * @var string
     */
    protected $format;

    /**
     * @var Client
     */
    public $client;

    /**
     * @var string
     */
    protected $base_url = 'https://api.impactradius.com/2010-09-01/';


    /**
     * ImpactRadiusApi constructor.
     * @param   $account_sid
     * @param   $auth_token
     * @param   $format
     */
    public function __construct($account_sid, $auth_token, $format = 'json')
    {
        $this->account_sid          = $account_sid;
        $this->auth_token           = $auth_token;
        $this->format               = $format;
        $this->client               = new Client();
    }

    /**
     * @param   GetActions|array $request
     * @return  GetActionsResponse
     */
    public function getAdvertiserActions($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $response                   = $this->makeHttpRequest('GET', 'Mediapartners/' . $this->account_sid . '/' . 'Actions', $request);

        $result                     = new GetActionsResponse($response);
        $result->clean();
        return $result;
    }

    /**
     * @param   GetCampaigns|array $request
     * @return  GetCampaignsResponse
     */
    public function getCampaigns($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $response                   = $this->makeHttpRequest('GET', 'Mediapartners/' . $this->account_sid . '/' . 'Campaigns', $request);

        $result                     = new GetCampaignsResponse($response);
        $result->clean();
        return $result;
    }

    /**
     * @param   string      $method
     * @param   string      $resource
     * @param   array       $query
     * @throws  InvalidNetworkCredentialsException
     * @return  array
     */
    public function makeHttpRequest($method, $resource, $query = [])
    {
        $url                        = $this->base_url . $resource . '.' . $this->format;

        $data                       = [
            'query'                 => $query,
            'auth'                  => [
                $this->account_sid,
                $this->auth_token,
            ],
        ];

        try {
            $response                   = $this->client->request($method, $url, $data);
            $jsonString                 = $response->getBody()->getContents();
            $json                       = json_decode($jsonString, true);
            return $json;
        } catch (ClientException $exception) {
            if ($exception->getCode() == 401) {
                throw new InvalidNetworkCredentialsException('Invalid Commission Junction api_key');
            } else {
                throw $exception;
            }
        }
    }
}
