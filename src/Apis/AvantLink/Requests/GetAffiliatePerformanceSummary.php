<?php

namespace FMTCco\Integrations\Apis\AvantLink\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetAffiliatePerformanceSummary implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * A custom string to be appended to AvantLink click-through URLs.
     * For use with your own personal tracking mechanisms
     *
     * @var string|null
     */
    protected $custom_tracking_code;

    /**
     * Formatted as "yyyy-mm-dd hh:ii:ss"
     * @var string|null
     */
    protected $date_begin;

    /**
     * Formatted as "yyyy-mm-dd hh:ii:ss"
     * @var string|null
     */
    protected $date_end;

    /**
     * A named date range. If specified, this takes precedence over a custom date range
     * One of: Today, Yesterday, Prev7Days, ThisMonth, LastMonth, ThisYear
     *
     * @var string|null
     */
    protected $date_range;

    /**
     *  A boolean value to indicate whether or not to include inactive merchant programs in the report results
     * (1 = yes, 0 = no)
     * The default behavior is to NOT include inactive merchants
     *
     * @var bool|null
     */
    protected $include_inactive_merchants;

    /**
     * The numeric identifier of a custom merchant grouping.
     *
     * @var int|null
     */
    protected $merchant_group_id;

    /**
     * An AvantLink assigned merchant identifier.
     *
     * @var int|null
     */
    protected $merchant_id;

    /**
     * An abbreviation for a particular type of AvantLink tool.
     *
     * @var string|null
     */
    protected $tool_type;

    /**
     *  A sales transaction id, a.k.a. order id.
     *
     * @var string|null
     */
    protected $transaction_id;

    /**
     * An AvantLink assigned affiliate website identifier.
     *
     * @var int|null
     */
    protected $website_id;


    /**
     * @return null|string
     */
    public function getCustomTrackingCode()
    {
        return $this->custom_tracking_code;
    }

    /**
     * @param null|string $custom_tracking_code
     */
    public function setCustomTrackingCode($custom_tracking_code)
    {
        $this->custom_tracking_code = $custom_tracking_code;
    }

    /**
     * @return null|string
     */
    public function getDateBegin()
    {
        return $this->date_begin;
    }

    /**
     * @param null|string $date_begin
     */
    public function setDateBegin($date_begin)
    {
        $this->date_begin = $date_begin;
    }

    /**
     * @return null|string
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * @param null|string $date_end
     */
    public function setDateEnd($date_end)
    {
        $this->date_end = $date_end;
    }

    /**
     * @return null|string
     */
    public function getDateRange()
    {
        return $this->date_range;
    }

    /**
     * @param null|string $date_range
     */
    public function setDateRange($date_range)
    {
        $this->date_range = $date_range;
    }

    /**
     * @return bool|null
     */
    public function getIncludeInactiveMerchants()
    {
        return $this->include_inactive_merchants;
    }

    /**
     * @param bool|null $include_inactive_merchants
     */
    public function setIncludeInactiveMerchants($include_inactive_merchants)
    {
        $this->include_inactive_merchants = $include_inactive_merchants;
    }

    /**
     * @return int|null
     */
    public function getMerchantGroupId()
    {
        return $this->merchant_group_id;
    }

    /**
     * @param int|null $merchant_group_id
     */
    public function setMerchantGroupId($merchant_group_id)
    {
        $this->merchant_group_id = $merchant_group_id;
    }

    /**
     * @return int|null
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * @param int|null $merchant_id
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
    }

    /**
     * @return null|string
     */
    public function getToolType()
    {
        return $this->tool_type;
    }

    /**
     * @param null|string $tool_type
     */
    public function setToolType($tool_type)
    {
        $this->tool_type = $tool_type;
    }

    /**
     * @return null|string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * @param null|string $transaction_id
     */
    public function setTransactionId($transaction_id)
    {
        $this->transaction_id = $transaction_id;
    }

    /**
     * @return int|null
     */
    public function getWebsiteId()
    {
        return $this->website_id;
    }

    /**
     * @param int|null $website_id
     */
    public function setWebsiteId($website_id)
    {
        $this->website_id = $website_id;
    }
}
