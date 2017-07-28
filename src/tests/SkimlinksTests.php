<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\Skimlinks\Requests\GetCommissions;
use FMTCco\Integrations\Apis\Skimlinks\Requests\GetReportMerchants;
use FMTCco\Integrations\Apis\Skimlinks\SkimlinksApi;

class SkimlinksTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;


        $request                    = new GetCommissions();
        $request->setStartDate('2017-01-01');
        $request->setEndDate('2017-04-01');

        $response                   = $api->getCommissions($request);
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\Skimlinks\Responses\GetCommissionsResponse::class, $response);
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\Skimlinks\Responses\Pagination::class, $response->getPagination());

        foreach ($response->getCommissions() AS $commission)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\Skimlinks\Responses\Commission::class, $commission);
            $this->assertEmpty($commission->getUnmappedVariables());
        }
    }

    /**
     * @return SkimlinksApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();

        $public_api_key             = getenv('SKIMLINKS_PUBLIC_API_KEY');
        $private_api_key            = getenv('SKIMLINKS_PRIVATE_API_KEY');

        if (is_null($public_api_key) || is_null($private_api_key))
            return null;
        else
            return new SkimlinksApi($public_api_key, $private_api_key);
    }

}