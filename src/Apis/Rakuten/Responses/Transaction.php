<?php

namespace FMTCco\Integrations\Apis\Rakuten\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Transaction implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var string
     */
    protected $Order_Id;

    /**
     * @var string
     */
    protected $Transaction_Date;

    /**
     * @var string
     */
    protected $Transaction_Time;

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
    protected $SKU;

    /**
     * @var string
     */
    protected $Product_Name;

    /**
     * @var string
     */
    protected $Sales;

    /**
     * @var string
     */
    protected $Num_Of_Items;

    /**
     * @var string
     */
    protected $Total_Commission;


    /**
     * Transaction constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->Order_Id                 = AU::get($data['Order ID']);
        $this->Transaction_Date         = AU::get($data['Transaction Date']);
        $this->Transaction_Time         = AU::get($data['Transaction Time']);
        $this->MID                      = AU::get($data['MID']);
        $this->Advertiser_Name          = AU::get($data['Advertiser Name']);
        $this->SKU                      = AU::get($data['SKU']);
        $this->Product_Name             = AU::get($data['Product Name']);
        $this->Sales                    = AU::get($data['Sales']);
        $this->Num_Of_Items             = AU::get($data['# of Items']);
        $this->Total_Commission         = AU::get($data['Total Commission']);
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->Order_Id;
    }

    /**
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->Transaction_Date;
    }

    /**
     * @return string
     */
    public function getTransactionTime()
    {
        return $this->Transaction_Time;
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
    public function getSKU()
    {
        return $this->SKU;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->Product_Name;
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
    public function getNumOfItems()
    {
        return $this->Num_Of_Items;
    }

    /**
     * @return string
     */
    public function getTotalCommission()
    {
        return $this->Total_Commission;
    }
}
