<?php

namespace FMTCco\Integrations\Apis\ShareASale;


use FMTCco\Integrations\Apis\ShareASale\Requests\GetActivity;
use FMTCco\Integrations\Apis\ShareASale\Requests\GetActivitySummary;
use FMTCco\Integrations\Apis\ShareASale\Requests\GetBalance;
use FMTCco\Integrations\Apis\ShareASale\Requests\GetEditTrail;
use FMTCco\Integrations\Apis\ShareASale\Requests\GetMerchantStatus;
use FMTCco\Integrations\Apis\ShareASale\Requests\GetVoidTrail;
use FMTCco\Integrations\Apis\ShareASale\Responses\ActivitySummaryResponse;
use FMTCco\Integrations\Apis\ShareASale\Responses\GetActivityResponse;
use FMTCco\Integrations\Apis\ShareASale\Responses\GetEditTrailResponse;
use FMTCco\Integrations\Apis\ShareASale\Responses\GetVoidTrailResponse;
use FMTCco\Integrations\Apis\ShareASale\Responses\MerchantStatus;
use FMTCco\Integrations\Exceptions\InsufficientNetworkPermissionsException;
use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use FMTCco\Integrations\Exceptions\InvalidNetworkDateRangeException;
use FMTCco\Integrations\Exceptions\RequiredNetworkFieldMissingException;
use FMTCco\Integrations\Exceptions\UnknownNetworkException;
use \GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ShareASaleApi
{

    /**
     * @var int
     */
    protected $affiliateId;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $secret_key;

    /**
     * @var float
     */
    protected $version;

    /**
     * @var string
     */
    protected $baseUrl              = 'https://api.shareasale.com/x.cfm';

    /**
     * @var Client
     */
    protected $client;


    /**
     * ShareASaleApi constructor.
     * @param int       $affiliateId
     * @param string    $token
     * @param string    $secret_key
     * @param float     $version
     */
    public function __construct($affiliateId, $token, $secret_key, $version = 2.1)
    {
        $this->affiliateId          = $affiliateId;
        $this->token                = $token;
        $this->secret_key           = $secret_key;
        $this->version              = $version;
        $this->client               = new Client();
    }


    /**
     * @param   GetMerchantStatus|array $request
     * @return  MerchantStatus[]
     */
    public function getMerchantStatus ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'merchantStatus', $request);

        $response                   = [];
        foreach ($result['merchantstatusreportrecord'] AS $item)
        {
            $response[]             = new MerchantStatus($item);
        }

        return $response;
    }

    /**
     * @param   GetBalance|array $request
     * @return  int
     */
    public function getBalance ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'balance', $request);

        return $result['balanceInquiryrecord']['balance'];
    }

    /**
     * @param   GetActivity|array $request
     * @return  GetActivityResponse
     */
    public function getActivity($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'activity', $request);

        $response                   = new GetActivityResponse($result);
        $response->clean();
        return $response;
    }

    /**
     * @param   GetActivitySummary|array $request
     * @return  ActivitySummaryResponse
     */
    public function getActivitySummary($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'activitySummary', $request);

        $response                   = new ActivitySummaryResponse($result);
        $response->clean();
        return $response;
    }

    /**
     * @param   GetEditTrail|array $request
     * @return  GetEditTrailResponse
     */
    public function getEditTrails($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'edittrail', $request);

        $response                   = new GetEditTrailResponse($result);
        $response->clean();
        return $response;
    }

    /**
     * @param   GetVoidTrail|array $request
     * @return  GetVoidTrailResponse
     */
    public function getVoidTrails($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'voidtrail', $request);

        $response                   = new GetVoidTrailResponse($result);
        $response->clean();
        return $response;
    }

    /**
     * @param   string      $method
     * @param   string      $resource
     * @param   array       $query
     * @throws  InvalidNetworkCredentialsException
     * @throws  RequiredNetworkFieldMissingException
     * @throws  InsufficientNetworkPermissionsException
     * @throws  InvalidNetworkDateRangeException
     * @throws  UnknownNetworkException
     * @return  array
     */
    public function makeHttpRequest($method, $resource, $query = [])
    {
        $query['affiliateId']       = $this->affiliateId;
        $query['token']             = $this->token;
        $query['version']           = $this->version;
        $query['action']            = $resource;

        $timestamp                  = gmdate(DATE_RFC1123);
        $auth_hash                  = hash("sha256", $this->token . ':' . $timestamp . ':' . $resource . ':' . $this->secret_key);

        try {
            $response               = $this->client->request($method, $this->baseUrl, [
                'headers' => [
                    'x-ShareASale-Date' => $timestamp,
                    'x-ShareASale-Authentication' => $auth_hash
                ],
                'query'             => $query,
            ]);

            $contents               = $response->getBody()->getContents();
            $contents               = str_replace([PHP_EOL, "\r", "\t"], '', $contents);
            $response_xml           = new \SimpleXMLElement($contents);
            $response_array         = json_decode(json_encode($response_xml), true);
            return $response_array;
        }
        catch (\Exception $exception)
        {
            if (preg_match("/Error Code 4001/", $contents)) {
                throw new InvalidNetworkCredentialsException('Share A Sale credentials is missing affiliateId');
            } else if (preg_match("/Error Code 4002/", $contents)) {
                throw new InvalidNetworkCredentialsException('Invalid Share A Sale account');
            } else if (preg_match("/Error Code 4075/", $contents)) {
                throw new InvalidNetworkCredentialsException('Invalid Share A Sale credentials');
            } else if (preg_match("/Error Code 4030/", $contents)) {
                throw new RequiredNetworkFieldMissingException('A required input is missing');
            } else if (preg_match("/Invalid Permissions/", $contents)) {
                throw new InsufficientNetworkPermissionsException();
            } else if (preg_match("/Error Code 4040/", $contents)) {
                throw new InvalidNetworkDateRangeException('Date Span too great');
            } else {
                throw new UnknownNetworkException($contents);
            }
        }
    }
}
