<?php

namespace FMTCco\Integrations\Apis\Rakuten\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class SalesActivityReport implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var string
     */
    protected $MID;

    /**
     * @var string
     */
    protected $Advertiser_Name;

    /**
     * @var string
     */
    protected $Num_Of_Impressions;

    /**
     * @var string
     */
    protected $Num_Of_Clicks;

    /**
     * @var string
     */
    protected $Click_Through_Rate;

    /**
     * @var string
     */
    protected $Num_Of_Orders;

    /**
     * @var string
     */
    protected $Orders_Per_Click_Ratio;

    /**
     * @var string
     */
    protected $Earnings_Per_Click;

    /**
     * @var string
     */
    protected $Num_Of_Items;

    /**
     * @var string
     */
    protected $Num_Of_Cancelled_Items;

    /**
     * @var string
     */
    protected $Sales;

    /**
     * @var string
     */
    protected $Baseline_Commission;

    /**
     * @var string
     */
    protected $Adjusted_Commission;

    /**
     * @var string
     */
    protected $Total_Commission;


    /**
     * SalesActivityReport constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->MID                      = AU::get($data['MID']);
        $this->Advertiser_Name          = AU::get($data['Advertiser Name']);
        $this->Num_Of_Impressions       = AU::get($data['# of Impressions']);
        $this->Num_Of_Clicks            = AU::get($data['# of Clicks']);
        $this->Click_Through_Rate       = AU::get($data['Click Through Rate (CTR)']);
        $this->Num_Of_Orders            = AU::get($data['# of Orders']);
        $this->Orders_Per_Click_Ratio   = AU::get($data['Orders/Click']);
        $this->Earnings_Per_Click       = AU::get($data['Earnings Per Click (EPC)']);
        $this->Num_Of_Items             = AU::get($data['# of Items']);
        $this->Num_Of_Cancelled_Items   = AU::get($data['# of Cancelled Items']);
        $this->Sales                    = AU::get($data['Sales']);
        $this->Baseline_Commission      = AU::get($data['Baseline Commission']);
        $this->Adjusted_Commission      = AU::get($data['Adjusted Commission']);
        $this->Total_Commission         = AU::get($data['Total Commission']);
    }

    /**
     * @return string
     */
    public function getMID()
    {
        return $this->MID;
    }

    /**
     * @return string
     */
    public function getAdvertiserName()
    {
        return $this->Advertiser_Name;
    }

    /**
     * @return string
     */
    public function getNumOfImpressions()
    {
        return $this->Num_Of_Impressions;
    }

    /**
     * @return string
     */
    public function getNumOfClicks()
    {
        return $this->Num_Of_Clicks;
    }

    /**
     * @return string
     */
    public function getClickThroughRate()
    {
        return $this->Click_Through_Rate;
    }

    /**
     * @return string
     */
    public function getNumOfOrders()
    {
        return $this->Num_Of_Orders;
    }

    /**
     * @return string
     */
    public function getOrdersPerClickRatio()
    {
        return $this->Orders_Per_Click_Ratio;
    }

    /**
     * @return string
     */
    public function getEarningsPerClick()
    {
        return $this->Earnings_Per_Click;
    }

    /**
     * @return string
     */
    public function getNumOfItems()
    {
        return $this->Num_Of_Items;
    }

    /**
     * @return string
     */
    public function getNumOfCancelledItems()
    {
        return $this->Num_Of_Cancelled_Items;
    }

    /**
     * @return string
     */
    public function getSales()
    {
        return $this->Sales;
    }

    /**
     * @return string
     */
    public function getBaselineCommission()
    {
        return $this->Baseline_Commission;
    }

    /**
     * @return string
     */
    public function getAdjustedCommission()
    {
        return $this->Adjusted_Commission;
    }

    /**
     * @return string
     */
    public function getTotalCommission()
    {
        return $this->Total_Commission;
    }
}
