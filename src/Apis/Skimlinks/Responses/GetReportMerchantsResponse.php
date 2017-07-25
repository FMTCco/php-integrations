<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class GetReportMerchantsResponse extends BaseGetResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var ReportMerchant[]
     */
    protected $reportMerchants;


    public function __construct($data = [])
    {
        parent::__construct($data);

        $this->reportMerchants              = [];
        $reportMerchants                    = AU::get($data['merchants'], []);
        $merchant_keys                      = array_keys($reportMerchants);
        foreach ($merchant_keys AS $key)
        {
            $this->reportMerchants[]        = new ReportMerchant($reportMerchants[$key]);
        }
    }

    /**
     * @return ReportMerchant[]
     */
    public function getReportMerchants()
    {
        return $this->reportMerchants;
    }

}