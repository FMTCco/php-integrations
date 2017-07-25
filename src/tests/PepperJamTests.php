<?php

namespace FMTCco\Integrations\Tests;


use FMTCco\Integrations\Apis\PepperJam\PepperJamApi;

class PepperJamTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;
    }

    /**
     * @return PepperJamApi|null
     */
    private function getApi ()
    {
        $api_key                    = getenv('PEPPER_JAM_API_KEY');

        if (is_null($api_key))
            return null;
        else
            return new PepperJamApi($api_key);
    }

}