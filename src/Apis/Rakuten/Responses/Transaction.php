<?php

namespace FMTCco\Integrations\Apis\Rakuten\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Transaction implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


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
        $this->Order_Id                 = AU::getUnset($data, 'Order ID');
        $this->Transaction_Date         = AU::getUnset($data, 'Transaction Date');
        $this->Transaction_Time         = AU::getUnset($data, 'Transaction Time');
        $this->MID                      = AU::getUnset($data, 'MID');
        $this->Advertiser_Name          = AU::getUnset($data, 'Advertiser Name');
        $this->SKU                      = AU::getUnset($data, 'SKU');
        $this->Product_Name             = AU::getUnset($data, 'Product Name');
        $this->Sales                    = AU::getUnset($data, 'Sales');
        $this->Num_Of_Items             = AU::getUnset($data, '# of Items');
        $this->Total_Commission         = AU::getUnset($data, 'Total Commission');

        $this->setUnmappedVariablesFromResponse($data);
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
