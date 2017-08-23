<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\Webgains\WebgainsApi;

class WebgainsTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;


        //  Not working...
        $api->getBriefProgramsAsString();

        //  Not working...
        //  $api->getProgramsWithMembershipStatus();

    }



    /**
     * @return WebgainsApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();

        $api_password               = getenv('WEBGAINS_API_PASSWORD');
        $affiliate_id               = getenv('WEBGAINS_AFFILIATE_ID');

        if (is_null($api_password) || is_null($affiliate_id))
            return null;
        else
            return new WebgainsApi($api_password, $affiliate_id);
    }

}