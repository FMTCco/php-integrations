<?php

namespace FMTCco\Integrations\Tests;


use FMTCco\Integrations\Apis\ImpactRadius\ImpactRadiusApi;

class ImpactRadiusTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;
    }

    /**
     * @return ImpactRadiusApi|null
     */
    private function getApi ()
    {
        $account_sid                = getenv('IMPACT_RADIUS_ACCOUNT_SID');
        $auth_token                 = getenv('IMPACT_RADIUS_AUTH_TOKEN');

        if (is_null($account_sid) || is_null($auth_token))
            return null;
        else
            return new ImpactRadiusApi($account_sid, $auth_token);
    }

}