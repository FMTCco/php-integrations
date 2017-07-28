<?php

namespace FMTCco\Integrations\Apis\AvantLink\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class SaleCommissionDetail extends BaseAvantLinkResponse implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var string
     */
    protected $Merchant;

    /**
     * @var string
     */
    protected $Merchant_Id;

    /**
     * @var string
     */
    protected $Website;

    /**
     * @var string
     */
    protected $Website_Id;

    /**
     * @var string|null
     */
    protected $Tool_Name;

    /**
     * @var string|null
     */
    protected $Campaign_Product_Link;

    /**
     * @var string|null
     */
    protected $Coupon_Code;

    /**
     * @var string|null
     */
    protected $Custom_Tracking_Code;

    /**
     * @var string
     */
    protected $Order_Id;

    /**
     * @var string
     */
    protected $Transaction_Amount;

    /**
     * @var string
     */
    protected $Base_Commission;

    /**
     * @var string
     */
    protected $Incentive_Commission;

    /**
     * @var string
     */
    protected $Total_Commission;

    /**
     * @var string
     */
    protected $Transaction_Type;

    /**
     * @var string
     */
    protected $Transaction_Date;

    /**
     * @var string|null
     */
    protected $Last_Click_Through;

    /**
     * @var string
     */
    protected $Mobile_Order;

    /**
     * @var string
     */
    protected $New_Customer;

    /**
     * @var string
     */
    protected $Item_Count;

    /**
     * @var string
     */
    protected $AvantLink_Transaction_Id;


    public function __construct($data = [])
    {
        $this->Merchant                 = AU::getUnset($data, 'Merchant');
        $this->Merchant_Id              = AU::getUnset($data, 'Merchant_Id');
        $this->Website                  = AU::getUnset($data, 'Website');
        $this->Website_Id               = AU::getUnset($data, 'Website_Id');
        $this->Tool_Name                = AU::getUnset($data, 'Tool_Name');
        $this->Campaign_Product_Link    = AU::getUnset($data, 'Campaign_Product_Link');
        $this->Coupon_Code              = AU::getUnset($data, 'Coupon_Code');
        $this->Custom_Tracking_Code     = AU::getUnset($data, 'Custom_Tracking_Code');
        $this->Order_Id                 = AU::getUnset($data, 'Order_Id');
        $this->Transaction_Amount       = AU::getUnset($data, 'Transaction_Amount');
        $this->Base_Commission          = AU::getUnset($data, 'Base_Commission');
        $this->Incentive_Commission     = AU::getUnset($data, 'Incentive_Commission');
        $this->Total_Commission         = AU::getUnset($data, 'Total_Commission');
        $this->Transaction_Type         = AU::getUnset($data, 'Transaction_Type');
        $this->Transaction_Date         = AU::getUnset($data, 'Transaction_Date');
        $this->Last_Click_Through       = AU::getUnset($data, 'Last_Click_Through');
        $this->Mobile_Order             = AU::getUnset($data, 'Mobile_Order');
        $this->New_Customer             = AU::getUnset($data, 'New_Customer');
        $this->Item_Count               = AU::getUnset($data, 'Item_Count');
        $this->AvantLink_Transaction_Id = AU::getUnset($data, 'AvantLink_Transaction_Id');

        $this->setUnmappedVariablesFromResponse($data);
    }

    public function clean()
    {
        if (empty($this->Tool_Name)) {
            $this->Tool_Name            = null;
        }

        if (empty($this->Campaign_Product_Link)) {
            $this->Campaign_Product_Link= null;
        }

        if (empty($this->Coupon_Code)) {
            $this->Coupon_Code          = null;
        }

        if (empty($this->Custom_Tracking_Code)) {
            $this->Custom_Tracking_Code = null;
        }

        if (empty($this->Last_Click_Through)) {
            $this->Last_Click_Through   = null;
        }

        if (empty($this->Item_Count)) {
            $this->Item_Count           = 0;
        }
    }

    /**
     * @return string
     */
    public function getMerchant()
    {
        return $this->Merchant;
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->Merchant_Id;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @return string
     */
    public function getWebsiteId()
    {
        return $this->Website_Id;
    }

    /**
     * @return null|string
     */
    public function getToolName()
    {
        return $this->Tool_Name;
    }

    /**
     * @return null|string
     */
    public function getCampaignProductLink()
    {
        return $this->Campaign_Product_Link;
    }

    /**
     * @return null|string
     */
    public function getCouponCode()
    {
        return $this->Coupon_Code;
    }

    /**
     * @return null|string
     */
    public function getCustomTrackingCode()
    {
        return $this->Custom_Tracking_Code;
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
    public function getTransactionAmount()
    {
        return $this->Transaction_Amount;
    }

    /**
     * @return string
     */
    public function getBaseCommission()
    {
        return $this->Base_Commission;
    }

    /**
     * @return string
     */
    public function getIncentiveCommission()
    {
        return $this->Incentive_Commission;
    }

    /**
     * @return string
     */
    public function getTotalCommission()
    {
        return $this->Total_Commission;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
        return $this->Transaction_Type;
    }

    /**
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->Transaction_Date;
    }

    /**
     * @return null|string
     */
    public function getLastClickThrough()
    {
        return $this->Last_Click_Through;
    }

    /**
     * @return string
     */
    public function getMobileOrder()
    {
        return $this->Mobile_Order;
    }

    /**
     * @return string
     */
    public function getNewCustomer()
    {
        return $this->New_Customer;
    }

    /**
     * @return string
     */
    public function getItemCount()
    {
        return $this->Item_Count;
    }

    /**
     * @return string
     */
    public function getAvantLinkTransactionId()
    {
        return $this->AvantLink_Transaction_Id;
    }
}
