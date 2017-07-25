<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class ReportMerchant implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int
     */
    protected $merchantID;

    /**
     * @var string
     */
    protected $merchantName;

    /**
     * The number of clicks recorded for the merchant
     * @var int
     */
    protected $clicks;

    /**
     * The total value of commissions earned by the merchant (in cents/pence)
     * @var int
     */
    protected $totalCommission;

    /**
     * The estimated cost per click for the merchant
     * @var int
     */
    protected $ecpc;

    /**
     * The number of sales divided by the number of clicks, the value is returned as a decimal representation of the percentage.
     * For example, a 12.34% conversionRate will be returned as 0.1234
     * @var float
     */
    protected $conversionRate;

    /**
     * @var string
     */
    protected $currency;


    public function __construct($data = [])
    {
        $this->merchantID               = AU::get($data['merchantID']);
        $this->merchantName             = AU::get($data['merchantName']);
        $this->clicks                   = AU::get($data['clicks']);
        $this->totalCommission          = AU::get($data['totalCommission']);
        $this->ecpc                     = AU::get($data['ecpc']);
        $this->conversionRate           = AU::get($data['conversionRate']);
        $this->currency                 = AU::get($data['currency']);
    }

    /**
     * @return int
     */
    public function getMerchantID()
    {
        return $this->merchantID;
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * @return int
     */
    public function getTotalCommission()
    {
        return $this->totalCommission;
    }

    /**
     * @return int
     */
    public function getEcpc()
    {
        return $this->ecpc;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

}