<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class TransactionSummary implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var float
     */
    protected $sale_revenue;

    /**
     * @var int
     */
    protected $impression_count;

    /**
     * @var int
     */
    protected $click_count;

    /**
     * @var float
     */
    protected $click_through_rate;

    /**
     * @var float
     */
    protected $conversion_rate;

    /**
     * @var float
     */
    protected $earnings_per_click;

    /**
     * @var int
     */
    protected $sale_count;

    /**
     * @var float
     */
    protected $total_sale_commission;

    /**
     * @var int
     */
    protected $lead_count;

    /**
     * @var float
     */
    protected $total_lead_commission;

    /**
     * @var float
     */
    protected $bonus_affiliate_commission;

    /**
     * @var float
     */
    protected $total_commission;

    /**
     * @var string
     */
    protected $program_name;


    public function __construct($data = [])
    {
        $this->sale_revenue             = AU::get($data['sale_revenue']);
        $this->impression_count         = AU::get($data['impression_count']);
        $this->click_count              = AU::get($data['click_count']);
        $this->click_through_rate       = AU::get($data['click_through_rate']);
        $this->conversion_rate          = AU::get($data['conversion_rate']);
        $this->earnings_per_click       = AU::get($data['earnings_per_click']);
        $this->sale_count               = AU::get($data['sale_count']);
        $this->total_sale_commission    = AU::get($data['total_sale_commission']);
        $this->lead_count               = AU::get($data['lead_count']);
        $this->total_lead_commission    = AU::get($data['total_lead_commission']);
        $this->bonus_affiliate_commission= AU::get($data['bonus_affiliate_commission']);
        $this->total_commission         = AU::get($data['total_commission']);
        $this->program_name             = AU::get($data['program_name']);
    }

    public function clean()
    {
        $this->sale_revenue             = floatval($this->sale_revenue);
        $this->impression_count         = intval($this->impression_count);
        $this->click_count              = intval($this->click_count);
        $this->click_through_rate       = floatval($this->click_through_rate);
        $this->conversion_rate          = floatval($this->conversion_rate);
        $this->earnings_per_click       = floatval($this->earnings_per_click);
        $this->sale_count               = intval($this->sale_count);
        $this->total_sale_commission    = floatval($this->total_sale_commission);
        $this->lead_count               = floatval($this->lead_count);
        $this->total_lead_commission    = floatval($this->total_lead_commission);
        $this->bonus_affiliate_commission= floatval($this->bonus_affiliate_commission);
        $this->total_commission         = floatval($this->total_commission);
    }

    /**
     * @return float
     */
    public function getSaleRevenue()
    {
        return $this->sale_revenue;
    }

    /**
     * @return int
     */
    public function getImpressionCount()
    {
        return $this->impression_count;
    }

    /**
     * @return int
     */
    public function getClickCount()
    {
        return $this->click_count;
    }

    /**
     * @return float
     */
    public function getClickThroughRate()
    {
        return $this->click_through_rate;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
        return $this->conversion_rate;
    }

    /**
     * @return float
     */
    public function getEarningsPerClick()
    {
        return $this->earnings_per_click;
    }

    /**
     * @return int
     */
    public function getSaleCount()
    {
        return $this->sale_count;
    }

    /**
     * @return float
     */
    public function getTotalSaleCommission()
    {
        return $this->total_sale_commission;
    }

    /**
     * @return int
     */
    public function getLeadCount()
    {
        return $this->lead_count;
    }

    /**
     * @return float
     */
    public function getTotalLeadCommission()
    {
        return $this->total_lead_commission;
    }

    /**
     * @return float
     */
    public function getBonusAffiliateCommission()
    {
        return $this->bonus_affiliate_commission;
    }

    /**
     * @return float
     */
    public function getTotalCommission()
    {
        return $this->total_commission;
    }

    /**
     * @return string
     */
    public function getProgramName()
    {
        return $this->program_name;
    }
}
