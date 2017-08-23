<?php

namespace FMTCco\Integrations\Apis\AvantLink\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class AssociationFeed implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var int
     */
    protected $Merchant_Id;

    /**
     * @var string
     */
    protected $Merchant_Name;

    /**
     * @var int
     */
    protected $Merchant_Category_Id;

    /**
     * @var string
     */
    protected $Merchant_Category_Name;

    /**
     * @var string
     */
    protected $Association_Status;

    /**
     * @var string
     */
    protected $Commission_Action;

    /**
     * @var string
     */
    protected $Commission_Type;

    /**
     * @var string
     */
    protected $Commission_Rate;

    /**
     * @var int
     */
    protected $Referral_Days;

    /**
     * @var int
     */
    protected $Reversal_Days;

    /**
     * @var string
     */
    protected $Date_Joined;

    /**
     * @var string
     */
    protected $Merchant_Logo;

    /**
     * @var string
     */
    protected $Merchant_URL;

    /**
     * @var string
     */
    protected $Available_Tools;

    /**
     * @var string
     */
    protected $Default_Tracking_URL;

    /**
     * @var string
     */
    protected $AvantLink_Exclusive;

    /**
     * @var string
     */
    protected $Network_Conversion_Rate;

    /**
     * @var string
     */
    protected $Network_Reversal_Rate;

    /**
     * @var string
     */
    protected $Network_Average_Sale_Amount;

    /**
     * @var string
     */
    protected $Earnings_Per_Click;

    /**
     * @var string
     */
    protected $Sales_Volume;

    /**
     * @var string
     */
    protected $Default_Program_Commission_Rate;


    /**
     * AffiliatePerformanceSummary constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->Merchant_Id                      = AU::getUnset($data, 'Merchant_Id');
        $this->Merchant_Name                    = AU::getUnset($data, 'Merchant_Name');
        $this->Merchant_Category_Id             = AU::getUnset($data, 'Merchant_Category_Id');
        $this->Merchant_Category_Name           = AU::getUnset($data, 'Merchant_Category_Name');
        $this->Association_Status               = AU::getUnset($data, 'Association_Status');
        $this->Commission_Action                = AU::getUnset($data, 'Commission_Action');
        $this->Commission_Type                  = AU::getUnset($data, 'Commission_Type');
        $this->Commission_Rate                  = AU::getUnset($data, 'Commission_Rate');
        $this->Referral_Days                    = AU::getUnset($data, 'Referral_Days');
        $this->Reversal_Days                    = AU::getUnset($data, 'Reversal_Days');
        $this->Date_Joined                      = AU::getUnset($data, 'Date_Joined');
        $this->Merchant_Logo                    = AU::getUnset($data, 'Merchant_Logo');
        $this->Merchant_URL                     = AU::getUnset($data, 'Merchant_URL');
        $this->Available_Tools                  = AU::getUnset($data, 'Available_Tools');
        $this->Default_Tracking_URL             = AU::getUnset($data, 'Default_Tracking_URL');
        $this->AvantLink_Exclusive              = AU::getUnset($data, 'AvantLink_Exclusive');
        $this->Network_Conversion_Rate          = AU::getUnset($data, 'Network_Conversion_Rate');
        $this->Network_Reversal_Rate            = AU::getUnset($data, 'Network_Reversal_Rate');
        $this->Network_Average_Sale_Amount      = AU::getUnset($data, 'Network_Average_Sale_Amount');
        $this->Earnings_Per_Click               = AU::getUnset($data, 'Earnings_Per_Click');
        $this->Sales_Volume                     = AU::getUnset($data, 'Sales_Volume');
        $this->Default_Program_Commission_Rate  = AU::getUnset($data, 'Default_Program_Commission_Rate');

        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return int
     */
    public function getMerchantId()
    {
        return $this->Merchant_Id;
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
        return $this->Merchant_Name;
    }

    /**
     * @return int
     */
    public function getMerchantCategoryId()
    {
        return $this->Merchant_Category_Id;
    }

    /**
     * @return string
     */
    public function getMerchantCategoryName()
    {
        return $this->Merchant_Category_Name;
    }

    /**
     * @return string
     */
    public function getAssociationStatus()
    {
        return $this->Association_Status;
    }

    /**
     * @return string
     */
    public function getCommissionAction()
    {
        return $this->Commission_Action;
    }

    /**
     * @return string
     */
    public function getCommissionType()
    {
        return $this->Commission_Type;
    }

    /**
     * @return string
     */
    public function getCommissionRate()
    {
        return $this->Commission_Rate;
    }

    /**
     * @return int
     */
    public function getReferralDays()
    {
        return $this->Referral_Days;
    }

    /**
     * @return int
     */
    public function getReversalDays()
    {
        return $this->Reversal_Days;
    }

    /**
     * @return string
     */
    public function getDateJoined()
    {
        return $this->Date_Joined;
    }

    /**
     * @return string
     */
    public function getMerchantLogo()
    {
        return $this->Merchant_Logo;
    }

    /**
     * @return string
     */
    public function getMerchantURL()
    {
        return $this->Merchant_URL;
    }

    /**
     * @return string
     */
    public function getAvailableTools()
    {
        return $this->Available_Tools;
    }

    /**
     * @return string
     */
    public function getDefaultTrackingURL()
    {
        return $this->Default_Tracking_URL;
    }

    /**
     * @return string
     */
    public function getAvantLinkExclusive()
    {
        return $this->AvantLink_Exclusive;
    }

    /**
     * @return string
     */
    public function getNetworkConversionRate()
    {
        return $this->Network_Conversion_Rate;
    }

    /**
     * @return string
     */
    public function getNetworkReversalRate()
    {
        return $this->Network_Reversal_Rate;
    }

    /**
     * @return string
     */
    public function getNetworkAverageSaleAmount()
    {
        return $this->Network_Average_Sale_Amount;
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
    public function getSalesVolume()
    {
        return $this->Sales_Volume;
    }

    /**
     * @return string
     */
    public function getDefaultProgramCommissionRate()
    {
        return $this->Default_Program_Commission_Rate;
    }

}