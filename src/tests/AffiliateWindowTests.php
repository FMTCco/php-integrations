<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\AffiliateWindow\AffiliateWindowApi;
use FMTCco\Integrations\Apis\AffiliateWindow\Requests\GetPrograms;
use FMTCco\Integrations\Apis\AffiliateWindow\Requests\GetTransactions;

class AffiliateWindowTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;

        $request                    = new GetTransactions();
        $request->setStartDate('2017-05-01T00:00:00');
        $request->setEndDate('2017-05-30T00:00:00');

        $transactions               = $api->getTransactions($request);

        $request                    = new GetPrograms();
        $request->setRelationship('joined');
        $programs                   = $api->getPrograms($request);
    }


    /**
     * @return AffiliateWindowApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();
        $affiliate_id               = getenv('AFFILIATE_WINDOW_AFFILIATE_ID');
        $api_password               = getenv('AFFILIATE_WINDOW_API_ACCESS_TOKEN');

        if (is_null($affiliate_id) || is_null($api_password))
            return null;
        else
            return new AffiliateWindowApi($affiliate_id, $api_password, 'publishers');
    }

}