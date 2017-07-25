<?php

namespace FMTCco\Integrations\Tests;


use FMTCco\Integrations\Apis\CommissionJunction\CommissionJunctionApi;

class CommissionJunctionTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;
    }

    /**
     * @return CommissionJunctionApi|null
     */
    private function getApi ()
    {
        $api_key                    = getenv('COMMISSION_JUNCTION_API_KEY');

        if (is_null($api_key))
            return null;
        else
            return new CommissionJunctionApi($api_key);
    }

}