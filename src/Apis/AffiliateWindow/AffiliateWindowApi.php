<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow;


use FMTCco\Integrations\Apis\AffiliateWindow\Requests\GetTransactions;
use FMTCco\Integrations\Apis\AffiliateWindow\Responses\Transaction;
use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use FMTCco\Integrations\Exceptions\UnknownNetworkException;
use \GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class AffiliateWindowApi
{

    /**
     * @var string
     */
    protected $affiliate_id;

    /**
     * @var string
     */
    protected $api_token;

    /**
     * @var string
     */
    protected $account_type;

    /**
     * @var string
     */
    protected $base_url             = 'https://api.awin.com/';

    /**
     * @var Client
     */
    protected $client;

    /**
     * @param   string      $affiliate_id
     * @param   string      $api_token
     * @param   string      $account_type
     */
    public function __construct($affiliate_id, $api_token, $account_type = 'advertisers')
    {
        $this->affiliate_id         = $affiliate_id;
        $this->api_token            = $api_token;
        $this->account_type         = $account_type;
        $this->base_url             = $this->base_url . $this->account_type . '/' . $this->affiliate_id . '/';
        $this->client               = new Client();
    }

    /**
     * @param GetTransactions|array     $request
     * @return Transaction[]
     */
    public function getTransactions ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $response                   = $this->makeHttpRequest('transactions/', $request);
        $results                    = [];
        foreach ($response AS $item)
        {
            $results[]              = new Transaction($item);
        }
        return $results;
    }

    /**
     * @param   string  $action
     * @param   array   $query
     * @return  array
     * @throws  InvalidNetworkCredentialsException|UnknownNetworkException
     */
    public function makeHttpRequest($action, $query = [])
    {
        try
        {
            $query['accessToken']       = $this->api_token;
            $this->base_url             = 'https://api.awin.com/publishers/51861/transactions/'; //$this->base_url . $action;
            $response                   = $this->client->request('get', $this->base_url, [
                'query'                 => $query,
            ]);
            $contents                   = $response->getBody()->getContents();
            $json                       = json_decode($contents, true);
            return $json;
        }
        catch (ClientException $exception) {
            throw $exception;
        }

    }

}