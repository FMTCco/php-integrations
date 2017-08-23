<?php

namespace FMTCco\Integrations\Apis\AvantLink;


use FMTCco\Integrations\Apis\AvantLink\Requests\GetAffiliatePerformanceSummary;
use FMTCco\Integrations\Apis\AvantLink\Requests\GetAssociationFeed;
use FMTCco\Integrations\Apis\AvantLink\Requests\GetSalesCommissionsDetails;
use FMTCco\Integrations\Apis\AvantLink\Responses\AffiliatePerformanceSummaryResponse;
use FMTCco\Integrations\Apis\AvantLink\Responses\AssociationFeed;
use FMTCco\Integrations\Apis\AvantLink\Responses\SaleCommissionDetailResponse;
use FMTCco\Integrations\Exceptions\InvalidNetworkCredentialsException;
use FMTCco\Integrations\Exceptions\InvalidNetworkDateRangeException;
use FMTCco\Integrations\Exceptions\RequiredNetworkFieldMissingException;
use FMTCco\Integrations\Exceptions\UnknownNetworkException;
use \GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class AvantLinkApi
{

    /**
     * @var int
     */
    protected $affiliate_id;

    /**
     * @var string
     */
    protected $auth_key;

    /**
     * One of: csv, html, tab, xml
     * @var string
     */
    protected $output;

    /**
     * @var string
     */
    protected $base_url             = 'https://classic.avantlink.com/api.php';

    /**
     * @var Client
     */
    public $client;


    public function __construct($affiliate_id, $auth_key, $output = 'xml')
    {
        $this->affiliate_id         = $affiliate_id;
        $this->auth_key             = $auth_key;
        $this->output               = $output;
        $this->client               = new Client();
    }

    /**
     * @param   GetAssociationFeed|array $request
     * @return  AssociationFeed[]
     */
    public function getAssociationFeed ($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $result                     = $this->makeHttpRequest('GET', 'AssociationFeed', $request);

        $associationFeeds           = [];
        foreach ($result['Table1'] AS $item)
        {
            $associationFeeds[]     = new AssociationFeed($item);
        }

        return $associationFeeds;
    }

    /**
     * @param   GetAffiliatePerformanceSummary|array $request
     * @return  AffiliatePerformanceSummaryResponse
     */
    public function getAffiliatePerformanceSummary($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $request['report_id']       = 1;

        $result                     = $this->makeHttpRequest('GET', 'AffiliateReport', $request);
        $response                   = new AffiliatePerformanceSummaryResponse($result);
        $response->clean();

        return $response;
    }

    /**
     * @param   GetSalesCommissionsDetails|array $request
     * @return  SaleCommissionDetailResponse
     */
    public function getSalesCommissionsDetails($request = [])
    {
        $request                    = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $request['report_id']       = 8;

        $result                     = $this->makeHttpRequest('GET', 'AffiliateReport', $request);
        $response                   = new SaleCommissionDetailResponse($result);
        $response->clean();
        return $response;
    }

    public function makeHttpRequest($method, $resource, $query = [])
    {
        $url                        = $this->base_url;

        $query['affiliate_id']      = $this->affiliate_id;
        $query['auth_key']          = $this->auth_key;
        $query['output']            = $this->output;
        $query['module']            = $resource;

        try {
            $response               = $this->client->request($method, $url, [
                'query'             => $query,
            ]);
            $contents               = $response->getBody()->getContents();
            $contents               = str_replace([PHP_EOL, "\r"], '', $contents);

            $json                   = json_decode(json_encode((array)simplexml_load_string($contents)), true);

            if (isset($json['error'])) {
                $errorMessage       = is_array($json['error']) ? $json['error'][0] : $json['error'];
                if (preg_match("/Invalid authentication key supplied for affiliate/", $errorMessage)) {
                    throw new InvalidNetworkCredentialsException('Invalid AvantLink auth_key');
                } else if (preg_match("/The authentication information supplied is for a disabled account/", $errorMessage)) {
                    throw new InvalidNetworkCredentialsException('Supplied AvantLink credentials are disabled for the account');
                } else if (preg_match("/Non-existent affiliate specified in request/", $errorMessage)) {
                    throw new InvalidNetworkCredentialsException('Invalid AvantLink affiliate_id');
                } else if (preg_match("/No value located for required parameter/", $errorMessage)) {
                    throw new RequiredNetworkFieldMissingException($errorMessage);
                } else if (preg_match("/Due to the volume of data involved, please choose a date range of 6 months or less for this report/", $errorMessage)) {
                    throw new InvalidNetworkDateRangeException($errorMessage);
                } else {
                    throw new UnknownNetworkException($errorMessage);
                }
            }
            if (!isset($json['Table1'])) {
                $json['Table1']     = [];
            }
            return $json;
        } catch (ClientException $exception) {
            throw new UnknownNetworkException($exception->getMessage());
        }
    }
}
