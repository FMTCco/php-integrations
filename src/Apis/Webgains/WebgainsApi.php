<?php

namespace FMTCco\Integrations\Apis\Webgains;


use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use FMTCco\Integrations\Exceptions\InvalidNetworkResourceException;

class WebgainsApi
{

    /**
     * @var string
     */
    protected $api_password;

    /**
     * @var string
     */
    protected $affiliate_id;

    /**
     * @var string
     */
    protected $baseUrl              = 'http://ws.webgains.com/aws.php';

    /**
     * @var string
     */
    protected $version;

    /**
     * @var \SoapClient
     */
    protected $client;


    /**
     * @param   string      $api_password
     * @param   string      $affiliate_id
     */
    public function __construct($api_password, $affiliate_id)
    {
        $this->api_password         = $api_password;
        $this->affiliate_id         = $affiliate_id;

        $options                    = [
            'exceptions'    => true,
            'trace' => 1,
        ];
        $this->client               = new \SoapClient($this->baseUrl, $options);
    }


    public function getProgramsWithMembershipStatus ($request = [])
    {
        $this->makeHttpRequest('getProgramsWithMembershipStatus', $request);
    }


    public function getBriefProgramsAsString ($request = [])
    {
        $this->makeHttpRequest('getBriefProgramsAsString', $request);
    }

    /**
     * @param   string  $action
     * @param   array   $query
     * @return  array
     * @throws  InvalidNetworkResourceException|InvalidNetworkCredentialsException
     */
    public function makeHttpRequest($action, $query = [])
    {
        try
        {
            $data                   = $this->client->$action('publishertoolkit', $this->api_password, $this->affiliate_id);
            return $data;
        }
        catch (\SoapFault $exception)
        {
            $errorMessage           = $exception->getMessage();
            if (preg_match("/is not a valid method/", $errorMessage))
                throw new InvalidNetworkResourceException('Invalid Webgains resource');
            else if (preg_match("/Incorrect user name/", $errorMessage))
                throw new InvalidNetworkCredentialsException('Invalid Webgains credentials');
        }

    }

}