<?php

namespace FMTCco\Integrations\Apis\AvantLink\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class AffiliatePerformanceSummary extends BaseAvantLinkResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var string
     */
    protected $Merchant;

    /**
     * @var int
     */
    protected $Merchant_Id;

    /**
     * @var int
     */
    protected $Ad_Impressions;

    /**
     * @var int
     */
    protected $Click_Throughs;

    /**
     * @var float
     */
    protected $Sales;

    /**
     * @var int
     */
    protected $Number_of_Sales;

    /**
     * @var float
     */
    protected $Mobile_Sales;

    /**
     * @var int
     */
    protected $Number_of_Mobile_Sales;

    /**
     * @var float
     */
    protected $Commissions;

    /**
     * @var float
     */
    protected $Incentives;

    /**
     * @var int
     */
    protected $Number_of_Adjustments;

    /**
     * @var float
     */
    protected $Conversion_Rate;

    /**
     * @var int
     */
    protected $New_Customers;

    /**
     * @var float
     */
    protected $New_Customer_;

    /**
     * @var float
     */
    protected $New_Customer_Sales;

    /**
     * @var float
     */
    protected $_30_day_Network_Conversion_Rate;

    /**
     * @var float
     */
    protected $Average_Sale_Amount;

    /**
     * @var float
     */
    protected $Click_Through_Rate;

    /**
     * @var float
     */
    protected $CPC_Earnings;

    /**
     * @var float
     */
    protected $Placement_Earnings;

    /**
     * @var float
     */
    protected $eCPM;

    /**
     * @var float
     */
    protected $EPC;

    /**
     * @var float
     */
    protected $Total_Commissions_Earnings;


    /**
     * AffiliatePerformanceSummary constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->Merchant                 = AU::get($data['Merchant']);
        $this->Merchant_Id              = AU::get($data['Merchant_Id']);
        $this->Ad_Impressions           = AU::get($data['Ad_Impressions']);
        $this->Click_Throughs           = AU::get($data['Click_Throughs']);
        $this->Sales                    = AU::get($data['Sales']);
        $this->Number_of_Sales          = AU::get($data['Number_of_Sales']);
        $this->Mobile_Sales             = AU::get($data['Mobile_Sales']);
        $this->Number_of_Mobile_Sales   = AU::get($data['Number_of_Mobile_Sales']);
        $this->Commissions              = AU::get($data['Commissions']);
        $this->Incentives               = AU::get($data['Incentives']);
        $this->Number_of_Adjustments    = AU::get($data['Number_of_Adjustments']);
        $this->Conversion_Rate          = AU::get($data['Conversion_Rate']);
        $this->New_Customers            = AU::get($data['New_Customers']);
        $this->New_Customer_            = AU::get($data['New_Customer_']);
        $this->New_Customer_Sales       = AU::get($data['New_Customer_Sales']);
        $this->_30_day_Network_Conversion_Rate  = AU::get($data['_30_day_Network_Conversion_Rate']);
        $this->Average_Sale_Amount      = AU::get($data['Average_Sale_Amount']);
        $this->Click_Through_Rate       = AU::get($data['Click_Through_Rate']);
        $this->CPC_Earnings             = AU::get($data['CPC_Earnings']);
        $this->Placement_Earnings       = AU::get($data['Placement_Earnings']);
        $this->eCPM                     = AU::get($data['eCPM']);
        $this->Total_Commissions_Earnings       = AU::get($data['Total_Commissions_Earnings']);
    }

    public function clean()
    {
        $this->Merchant                 = trim($this->Merchant);
        $this->Merchant_Id              = intval($this->Merchant_Id);
        $this->Ad_Impressions           = intval($this->Ad_Impressions);

        if (empty($this->Click_Throughs)) {
            $this->Click_Throughs       = 0;
        } else {
            $this->Click_Throughs       = intval($this->Click_Throughs);
        }

        $this->Sales                    = parent::cleanFloat($this->Sales);
        $this->Number_of_Sales          = intval($this->Number_of_Sales);
        $this->Mobile_Sales             = parent::cleanFloat($this->Mobile_Sales);
        $this->Number_of_Mobile_Sales   = intval($this->Number_of_Mobile_Sales);
        $this->Commissions              = parent::cleanFloat($this->Commissions);
        $this->Incentives               = parent::cleanFloat($this->Incentives);
        $this->Number_of_Adjustments    = intval($this->Number_of_Adjustments);
        $this->Conversion_Rate          = parent::cleanFloat($this->Conversion_Rate);
        $this->New_Customers            = intval($this->New_Customers);
        $this->New_Customer_            = parent::cleanFloat($this->New_Customer_);
        $this->New_Customer_Sales       = parent::cleanFloat($this->New_Customer_Sales);
        $this->_30_day_Network_Conversion_Rate  = parent::cleanFloat($this->_30_day_Network_Conversion_Rate);
        $this->Average_Sale_Amount      = parent::cleanFloat($this->Average_Sale_Amount);
        $this->Click_Through_Rate       = parent::cleanFloat($this->Click_Through_Rate);
        $this->CPC_Earnings             = parent::cleanFloat($this->CPC_Earnings);
        $this->Placement_Earnings       = parent::cleanFloat($this->Placement_Earnings);
        $this->eCPM                     = parent::cleanFloat($this->eCPM);
        $this->EPC                      = parent::cleanFloat($this->EPC);
        $this->Total_Commissions_Earnings   = parent::cleanFloat($this->Total_Commissions_Earnings);
    }

    /**
     * @return string
     */
    public function getMerchant()
    {
        return $this->Merchant;
    }

    /**
     * @return int
     */
    public function getMerchantId()
    {
        return $this->Merchant_Id;
    }

    /**
     * @return int
     */
    public function getAdImpressions()
    {
        return $this->Ad_Impressions;
    }

    /**
     * @return int
     */
    public function getClickThroughs()
    {
        return $this->Click_Throughs;
    }

    /**
     * @return float
     */
    public function getSales()
    {
        return $this->Sales;
    }

    /**
     * @return int
     */
    public function getNumberOfSales()
    {
        return $this->Number_of_Sales;
    }

    /**
     * @return float
     */
    public function getMobileSales()
    {
        return $this->Mobile_Sales;
    }

    /**
     * @return int
     */
    public function getNumberOfMobileSales()
    {
        return $this->Number_of_Mobile_Sales;
    }

    /**
     * @return float
     */
    public function getCommissions()
    {
        return $this->Commissions;
    }

    /**
     * @return float
     */
    public function getIncentives()
    {
        return $this->Incentives;
    }

    /**
     * @return int
     */
    public function getNumberOfAdjustments()
    {
        return $this->Number_of_Adjustments;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
        return $this->Conversion_Rate;
    }

    /**
     * @return int
     */
    public function getNewCustomers()
    {
        return $this->New_Customers;
    }

    /**
     * @return float
     */
    public function getNewCustomer()
    {
        return $this->New_Customer_;
    }

    /**
     * @return float
     */
    public function getNewCustomerSales()
    {
        return $this->New_Customer_Sales;
    }

    /**
     * @return float
     */
    public function get30DayNetworkConversionRate()
    {
        return $this->_30_day_Network_Conversion_Rate;
    }

    /**
     * @return float
     */
    public function getAverageSaleAmount()
    {
        return $this->Average_Sale_Amount;
    }

    /**
     * @return float
     */
    public function getClickThroughRate()
    {
        return $this->Click_Through_Rate;
    }

    /**
     * @return float
     */
    public function getCPCEarnings()
    {
        return $this->CPC_Earnings;
    }

    /**
     * @return float
     */
    public function getPlacementEarnings()
    {
        return $this->Placement_Earnings;
    }

    /**
     * @return float
     */
    public function getECPM()
    {
        return $this->eCPM;
    }

    /**
     * @return float
     */
    public function getEPC()
    {
        return $this->EPC;
    }

    /**
     * @return float
     */
    public function getTotalCommissionsEarnings()
    {
        return $this->Total_Commissions_Earnings;
    }
}
