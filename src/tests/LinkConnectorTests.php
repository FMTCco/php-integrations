<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\LinkConnector\LinkConnectorApi;

class LinkConnectorTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;

        $results                    = $api->getApprovedCampaigns();
        foreach ($results AS $campaign)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\LinkConnector\Responses\Campaign::class, $campaign);
            $this->assertEmpty($campaign->getUnmappedVariables());
        }


        $results                    = $api->getReportAccountBalance();
        foreach ($results AS $accountBalance)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\LinkConnector\Responses\AccountBalance::class, $accountBalance);
            $this->assertEmpty($accountBalance->getUnmappedVariables());
        }
    }

    /**
     * @return LinkConnectorApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();
        $api_key                    = getenv('LINK_CONNECTOR_API_KEY');

        if (is_null($api_key))
            return null;
        else
            return new LinkConnectorApi($api_key);
    }

}