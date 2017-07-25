<?php

namespace FMTCco\Integrations\Tests;


use FMTCco\Integrations\Apis\Skimlinks\SkimlinksApi;

class SkimlinksTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;
    }

    /**
     * @return SkimlinksApi|null
     */
    private function getApi ()
    {
        $public_api_key             = getenv('SKIMLINKS_PUBLIC_API_KEY');
        $private_api_key            = getenv('SKIMLINKS_PRIVATE_API_KEY');

        if (is_null($public_api_key) || is_null($private_api_key))
            return null;
        else
            return new SkimlinksApi($public_api_key, $private_api_key);
    }

}