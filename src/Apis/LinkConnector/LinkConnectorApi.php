<?php

namespace FMTCco\Integrations\Apis\LinkConnector;


use FMTCco\Integrations\Apis\LinkConnector\Requests\GetApprovedCampaigns;
use FMTCco\Integrations\Apis\LinkConnector\Requests\GetReportAccountBalance;
use FMTCco\Integrations\Apis\LinkConnector\Responses\AccountBalance;
use FMTCco\Integrations\Apis\LinkConnector\Responses\Campaign;
use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use FMTCco\Integrations\Exceptions\InvalidNetworkResourceException;
use \GuzzleHttp\Client;

class LinkConnectorApi
{

    /**
     * @var string
     */
    protected $base_url = 'http://www.linkconnector.com/api/';

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
        $this->client               = new Client(
            [
                'base_uri'          => $this->base_url,
            ]
        );
    }

    /**
     * @param   GetApprovedCampaigns|array $request
     * @return  Campaign[]
     */
    public function getApprovedCampaigns ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $response                   = $this->makeHttpRequest('POST', 'getCampaignApproved', $request);

        $campaigns                  = [];
        foreach ($response['Results'] AS $item)
        {
            $campaigns[]            = new Campaign($item);
        }

        return $campaigns;
    }

    /**
     * @param   GetReportAccountBalance|array $request
     * @return  AccountBalance[]
     */
    public function getReportAccountBalance ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $response                   = $this->makeHttpRequest('POST', 'getReportAccountBalance', $request);

        $balances                   = [];
        foreach ($response['Results'] AS $item)
        {
            $balances[]             = new AccountBalance($item);
        }

        return $balances;
    }

    /**
     * @param   string      $method
     * @param   string      $resource
     * @param   array       $request
     * @param   string      $format
     * @return  array
     * @throws  InvalidNetworkCredentialsException
     * @throws  InvalidNetworkResourceException
     */
    public function makeHttpRequest($method, $resource, $request = [], $format = 'JSON')
    {
        $response                   = $this->client->request($method, '', [
            'form_params' => [
                'Key'           => $this->api_key,
                'Function'      => $resource,
                'Format'        => $format,
            ]
        ]);

        $data                   = $response->getBody()->getContents();
        if ($data == 'Unable to complete request: Invalid API Key')
            throw new InvalidNetworkCredentialsException('Invalid LinkConnector API key');
        else if ($data == 'Unable to complete request: Unsupported Function')
            throw new InvalidNetworkResourceException('Unsupported LinkConnector Function');

        return json_decode($data, true);
    }
}