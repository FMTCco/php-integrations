<?php

namespace FMTCco\Integrations\Apis\CommissionJunction\Responses;


use jamesvweston\Utilities\ArrayUtil as AU;

class Advertiser
{

    /**
     * @var int
     */
    protected $advertiser_id;

    /**
     * @var string
     */
    protected $account_status;

    /**
     * @var float
     */
    protected $seven_day_epc;

    /**
     * @var float
     */
    protected $three_month_epc;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $advertiser_name;

    /**
     * @var string
     */
    protected $program_url;

    /**
     * @var string
     */
    protected $relationship_status;

    /**
     * @var bool
     */
    protected $mobile_tracking_certified;

    /**
     * @var int
     */
    protected $network_rank;

    /**
     * @var PrimaryCategory
     */
    protected $primary_category;

    /**
     * @var bool
     */
    protected $performance_incentives;

    /**
     * @var Action[]
     */
    protected $actions;

    /**
     * @var string[]
     */
    protected $link_types;


    public function __construct($data = [])
    {
        $this->advertiser_id            = AU::get($data['advertiser-id']);
        $this->account_status           = AU::get($data['account-status']);
        $this->seven_day_epc            = AU::get($data['seven-day-epc']);
        $this->three_month_epc          = AU::get($data['three-month-epc']);
        $this->language                 = AU::get($data['language']);
        $this->advertiser_name          = AU::get($data['advertiser-name']);
        $this->program_url              = AU::get($data['program-url']);
        $this->relationship_status      = AU::get($data['relationship-status']);
        $this->mobile_tracking_certified = AU::get($data['mobile-tracking-certified']);
        $this->network_rank             = AU::get($data['network-rank']);
        $this->primary_category         = AU::get($data['primary-category']);
        $this->performance_incentives   = AU::get($data['performance-incentives']);
        $this->link_types               = AU::get($data['link-types']['link-type']);

        $this->actions                  = [];
        $actions                        = AU::get($data['actions']['action']);
        if (!AU::isArrays($actions))
            $actions                    = [$actions];

        foreach ($actions AS $item)
        {
            $this->actions[]            = new Action($item);
        }
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->account_status;
    }

    /**
     * @return float
     */
    public function getSevenDayEpc()
    {
        return $this->seven_day_epc;
    }

    /**
     * @return float
     */
    public function getThreeMonthEpc()
    {
        return $this->three_month_epc;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getAdvertiserName()
    {
        return $this->advertiser_name;
    }

    /**
     * @return string
     */
    public function getProgramUrl()
    {
        return $this->program_url;
    }

    /**
     * @return string
     */
    public function getRelationshipStatus()
    {
        return $this->relationship_status;
    }

    /**
     * @return bool
     */
    public function isMobileTrackingCertified()
    {
        return $this->mobile_tracking_certified;
    }

    /**
     * @return int
     */
    public function getNetworkRank()
    {
        return $this->network_rank;
    }

    /**
     * @return PrimaryCategory
     */
    public function getPrimaryCategory()
    {
        return $this->primary_category;
    }

    /**
     * @return bool
     */
    public function isPerformanceIncentives()
    {
        return $this->performance_incentives;
    }

    /**
     * @return Action[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return string[]
     */
    public function getLinkTypes()
    {
        return $this->link_types;
    }

}