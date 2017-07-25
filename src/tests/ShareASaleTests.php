<?php

namespace FMTCco\Integrations\Tests;


use FMTCco\Integrations\Apis\ShareASale\ShareASaleApi;

class ShareASaleTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;
    }

    /**
     * @return ShareASaleApi|null
     */
    private function getApi ()
    {
        $affiliate_id               = getenv('SHARE_A_SALE_AFFILIATE_ID');
        $token                      = getenv('SHARE_A_SALE_TOKEN');
        $secret_key                 = getenv('SHARE_A_SALE_SECRET_KEY');


        if (is_null($affiliate_id) || is_null($token) || is_null($secret_key))
            return null;
        else
            return new ShareASaleApi($affiliate_id, $token, $secret_key);
    }

}