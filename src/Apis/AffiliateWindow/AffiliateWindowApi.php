<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow;


use FMTCco\Integrations\Apis\AffiliateWindow\Requests\GetClickStats;
use FMTCco\Integrations\Apis\AffiliateWindow\Requests\GetMerchantList;
use FMTCco\Integrations\Apis\AffiliateWindow\Responses\ClickStat;
use FMTCco\Integrations\Apis\AffiliateWindow\Responses\Merchant;
use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use FMTCco\Integrations\Exceptions\UnknownNetworkException;

class AffiliateWindowApi
{

    /**
     * @var string
     */
    protected $affiliate_id;

    /**
     * @var string
     */
    protected $api_password;

    /**
     * @var string
     */
    protected $base_url             = 'http://api.affiliatewindow.com/v4/AffiliateService?wsdl';

    /**
     * @var string
     */
    protected $name_space           = 'http://api.affiliatewindow.com/v4/AffiliateService';

    /**
     * @var \SoapClient
     */
    protected $client;


    /**
     * @param GetClickStats|array $request
     * @return ClickStat[]
     */
    public function getClickStats ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $response                   = $this->makeHttpRequest('getClickStats', $request);

        $clickStats                 = [];
        foreach ($response AS $item)
        {
            $clickStats[]           = new ClickStat($item);
        }

        return $clickStats;
    }

    /**
     * @param GetMerchantList|array     $request
     * @return Merchant[]
     */
    public function getMerchantList ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $response                   = $this->makeHttpRequest('getMerchantList', $request);

        $merchants                  = [];
        foreach ($response AS $item)
        {
            $merchants[]            = new Merchant($item);
        }
        return $merchants;
    }

    /**
     * @param   string      $affiliate_id
     * @param   string      $api_password
     */
    public function __construct($affiliate_id, $api_password)
    {
        $this->affiliate_id         = $affiliate_id;
        $this->api_password         = $api_password;


        $user                       = new \stdClass();
        $user->iId                  = $this->affiliate_id;
        $user->sType                = 'affiliate';
        $user->sPassword            = $this->api_password;

        $options                    = [
            'exceptions'    => true,
            'trace' => 1,
        ];

        $this->client               = new \SoapClient($this->base_url, $options);
        $this->client->__setSoapHeaders([
            new \SoapHeader(
                $this->name_space,
                'UserAuthentication',
                $user
            )
        ]);
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
            $response               = $this->client->$action($query);
            $responseName           = $action . 'Return';
            return json_decode(json_encode($response->$responseName), True);
        }
        catch (\SoapFault $exception)
        {
            if ($exception->getMessage() == 'Authentication Failed')
                throw new InvalidNetworkCredentialsException('Invalid AffiliateWindow credentials');
            else
                throw new UnknownNetworkException($exception->getMessage());
        }

    }

}