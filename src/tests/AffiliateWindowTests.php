<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\AffiliateWindow\AffiliateWindowApi;

class AffiliateWindowTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;

        $response                   = $api->getMerchantList();

        foreach ($response AS $merchant)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AffiliateWindow\Responses\Merchant::class, $merchant);
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AffiliateWindow\Responses\PrimaryRegion::class, $merchant->getOPrimaryRegion());
            $this->assertEmpty($merchant->getUnmappedVariables());
            $this->assertEmpty($merchant->getOPrimaryRegion()->getUnmappedVariables());
        }
    }


    /**
     * @return AffiliateWindowApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();
        $affiliate_id               = getenv('AFFILIATE_WINDOW_AFFILIATE_ID');
        $api_password               = getenv('AFFILIATE_WINDOW_API_PASSWORD');

        if (is_null($affiliate_id) || is_null($api_password))
            return null;
        else
            return new AffiliateWindowApi($affiliate_id, $api_password);
    }

}