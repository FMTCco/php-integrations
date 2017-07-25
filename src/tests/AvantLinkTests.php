<?php

namespace FMTCco\Integrations\Tests;


use FMTCco\Integrations\Apis\AvantLink\AvantLinkApi;

class AvantLinkTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;
    }


    /**
     * @return AvantLinkApi|null
     */
    private function getApi ()
    {
        $affiliate_id               = getenv('AVANT_LINK_AFFILIATE_ID');
        $auth_key                   = getenv('AVANT_LINK_AUTH_KEY');

        if (is_null($affiliate_id) || is_null($auth_key))
            return null;
        else
            return new AvantLinkApi($affiliate_id, $auth_key);
    }

}