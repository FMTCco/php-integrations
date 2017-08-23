<?php

namespace FMTCco\Integrations\Apis\LinkConnector;


use FMTCco\Integrations\Apis\LinkConnector\Requests\GetApprovedCampaigns;
use FMTCco\Integrations\Apis\LinkConnector\Requests\GetReportAccountBalance;
use FMTCco\Integrations\Apis\LinkConnector\Responses\AccountBalance;
use FMTCco\Integrations\Apis\LinkConnector\Responses\Campaign;
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


    public function makeHttpRequest($method, $resource, $query = [], $format = 'JSON')
    {
        $response                   = $this->client->request($method, '', [
            'form_params' => [
                'Key'           => $this->api_key,
                'Function'      => $resource,
                'Format'        => $format,
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
}