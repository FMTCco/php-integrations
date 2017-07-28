<?php

namespace FMTCco\Integrations\Tests;


use Dotenv\Dotenv;
use FMTCco\Integrations\Apis\ShareASale\Requests\GetActivity;
use FMTCco\Integrations\Apis\ShareASale\ShareASaleApi;

class ShareASaleTests extends \PHPUnit_Framework_TestCase
{

    public function tests ()
    {
        $api                        = $this->getApi();
        if (is_null($api))
            return;

        $request                    = new GetActivity();
        $request->setDateStart('05/01/2017');
        $request->setDateEnd('07/27/2017');

        $response                   = $api->getActivity($request);
        $this->assertInstanceOf(\FMTCco\Integrations\Apis\ShareASale\Responses\GetActivityResponse::class, $response);

        foreach ($response->getData() AS $activity)
        {
            $this->assertInstanceOf(\FMTCco\Integrations\Apis\ShareASale\Responses\Activity::class, $activity);
            $this->assertEmpty($activity->getUnmappedVariables());
        }
    }

    /**
     * @return ShareASaleApi|null
     */
    private function getApi ()
    {
        $dotEnv                     = new Dotenv('./');
        $dotEnv->load();

        $affiliate_id               = getenv('SHARE_A_SALE_AFFILIATE_ID');
        $token                      = getenv('SHARE_A_SALE_TOKEN');
        $secret_key                 = getenv('SHARE_A_SALE_SECRET_KEY');


        if (is_null($affiliate_id) || is_null($token) || is_null($secret_key))
            return null;
        else
            return new ShareASaleApi($affiliate_id, $token, $secret_key);
    }

}