<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\AvantLink\AvantLinkApi;
use FMTCco\Integrations\Apis\AvantLink\Requests\GetSalesCommissionsDetails;

class AvantLinkTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;

        $request                    = new GetSalesCommissionsDetails();
        $request->setDateBegin('2016-01-01 00:00:00');
        $request->setDateEnd('2016-05-01 00:00:00');
        $request->setIncludeInactiveMerchants(1);
        $response                   = $api->getSalesCommissionsDetails($request);

        $this->assertInstanceOf(\FMTCco\Integrations\Apis\AvantLink\Responses\SaleCommissionDetailResponse::class, $response);

        foreach ($response->getItems() AS $saleCommissionDetail)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AvantLink\Responses\SaleCommissionDetail::class, $saleCommissionDetail);
            $this->assertEmpty($saleCommissionDetail->getUnmappedVariables());
        }
    }


    /**
     * @return AvantLinkApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();
        $affiliate_id               = getenv('AVANT_LINK_AFFILIATE_ID');
        $auth_key                   = getenv('AVANT_LINK_AUTH_KEY');

        if (is_null($affiliate_id) || is_null($auth_key))
            return null;
        else
            return new AvantLinkApi($affiliate_id, $auth_key);
    }

}