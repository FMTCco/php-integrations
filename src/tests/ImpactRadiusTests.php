<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\ImpactRadius\ImpactRadiusApi;
use FMTCco\Integrations\Apis\ImpactRadius\Requests\GetActions;

class ImpactRadiusTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;

        $request                    = new GetActions();
        $request->setStartDate('2017-01-01T00:00:00Z');
        $request->setEndDate('2017-07-27T00:00:00Z');
        $request->setPageSize(30000);

        $response                   = $api->getAdvertiserActions($request);
        $this->assertEmpty($response->getUnmappedVariables());

        $this->assertInternalType("int", $response->getPage());
        $this->assertInternalType("int", $response->getNumpages());
        $this->assertInternalType("int", $response->getPagesize());
        $this->assertInternalType("int", $response->getTotal());
        $this->assertInternalType("int", $response->getStart());
        $this->assertInternalType("int", $response->getEnd());
        $this->assertInternalType("string", $response->getUri());

        foreach ($response->getData() AS $action)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\ImpactRadius\Responses\Action::class, $action);

            $this->assertEmpty($action->getUnmappedVariables());
        }

    }

    /**
     * @return ImpactRadiusApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();
        $account_sid                = getenv('IMPACT_RADIUS_ACCOUNT_SID');
        $auth_token                 = getenv('IMPACT_RADIUS_AUTH_TOKEN');

        if (is_null($account_sid) || is_null($auth_token))
            return null;
        else
            return new ImpactRadiusApi($account_sid, $auth_token);
    }

}