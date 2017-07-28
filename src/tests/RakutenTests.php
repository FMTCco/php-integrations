<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\Rakuten\RakutenApi;

class RakutenTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;
    }

    /**
     * @return RakutenApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();

        $token                      = getenv('RAKUTEN_TOKEN');

        if (is_null($token))
            return null;
        else
            return new RakutenApi($token);
    }

}