<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\CommissionJunction\CommissionJunctionApi;
use FMTCco\Integrations\Apis\CommissionJunction\Requests\GetAdvertisers;
use FMTCco\Integrations\Apis\CommissionJunction\Requests\GetCommissions;

class CommissionJunctionTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;

        $request                    = new GetAdvertisers();
        $request->setAdvertiserIds('joined');
        $request->setRecordsPerPage(100);
        $request->setPageNumber(1);

        $response                   = $api->getAdvertisers($request);



        $request                    = new GetCommissions();

        $request->setStartDate('2017-01-01UTC00:00:00 0700J');
        $request->setEndDate('2017-02-01UTC00:00:00 0700J');
        $request->setDateType('posting');
        $response                   = $api->getCommissions($request);

        foreach ($response->getCommissions() AS $commission)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\CommissionJunction\Responses\Commission::class, $commission);
            $this->assertEmpty($commission->getUnmappedVariables());
        }
    }

    /**
     * @return CommissionJunctionApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();
        $api_key                    = getenv('COMMISSION_JUNCTION_API_KEY');

        if (is_null($api_key))
            return null;
        else
            return new CommissionJunctionApi($api_key);
    }

}