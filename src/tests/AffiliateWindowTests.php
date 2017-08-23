<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\AffiliateWindow\AffiliateWindowApi;
use FMTCco\Integrations\Apis\AffiliateWindow\Requests\GetClickStats;

class AffiliateWindowTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;

        $request                    = new GetClickStats();
        $request->setDStartDate(date('c', time()-(60*60*24*30)));
        $request->setDEndDate(date('c'));

        $response                   = $api->getClickStats($request);

        foreach ($response AS $clickStat)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AffiliateWindow\Responses\ClickStat::class, $clickStat);
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AffiliateWindow\Responses\Value::class, $clickStat->getMPendingValue());
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AffiliateWindow\Responses\Value::class, $clickStat->getMPendingCommission());
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AffiliateWindow\Responses\Value::class, $clickStat->getMConfirmedValue());
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AffiliateWindow\Responses\Value::class, $clickStat->getMConfirmedCommission());
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AffiliateWindow\Responses\Value::class, $clickStat->getMDeclinedValue());
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\AffiliateWindow\Responses\Value::class, $clickStat->getMDeclinedCommission());
        }


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