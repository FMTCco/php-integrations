<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\PepperJam\PepperJamApi;
use FMTCco\Integrations\Apis\PepperJam\Requests\GetAdvertisers;
use FMTCco\Integrations\Apis\PepperJam\Requests\GetTransactionDetails;

class PepperJamTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;

        $request                    = new GetAdvertisers();
        $request->setStatus('joined');
        $request->setPage(1);

        $response        = $api->getAdvertisers($request);

        $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\AdvertisersResponse::class, $response);
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\Pagination::class, $response->getPagination());
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\Status::class, $response->getStatus());
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\Requests::class, $response->getRequests());
        foreach ($response->getData() AS $advertiser)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\Advertiser::class, $advertiser);
            foreach ($advertiser->getCategory() AS $category)
            {
                $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\Category::class, $category);
            }
        }



        $request                    = new GetTransactionDetails();
        $request->setStartDate('2017-01-01');
        $request->setEndDate('2017-07-01');
        $request->setIncludeCoupons(true);
        $request->setDeviceType(true);

        $response                   = $api->getTransactionDetails($request);
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\TransactionDetailResponse::class, $response);
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\Pagination::class, $response->getPagination());
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\Status::class, $response->getStatus());
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\Requests::class, $response->getRequests());

        foreach ($response->getData() AS $transactionDetail)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\PepperJam\Responses\TransactionDetail::class, $transactionDetail);
            $this->assertEmpty($transactionDetail->getUnmappedVariables());
        }

    }

    /**
     * @return PepperJamApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();

        $api_key                    = getenv('PEPPER_JAM_API_KEY');

        if (is_null($api_key))
            return null;
        else
            return new PepperJamApi($api_key);
    }

}