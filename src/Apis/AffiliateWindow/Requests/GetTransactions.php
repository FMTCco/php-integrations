<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;


/**
 * Class GetTransactions
 * @package FMTCco\Integrations\Apis\AffiliateWindow\Requests
 * @see http://wiki.awin.com/index.php/API_get_transactions_list
 */
class GetTransactions implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var string
     * Formatted as 2017-01-01T00:00:00
     */
    protected $startDate;

    /**
     * @var string
     * Formatted as 2017-01-01T00:00:00
     */
    protected $endDate;

    /**
     * @var string
     * Defaults to UTC
     */
    protected $timezone;// = 'UTC';

    /**
     * @var string|null
     * Defaults to transaction.
     * Possible values: transaction, validation
     */
    protected $dateType = 'transaction';

    /**
     * @var string|null
     * Possible values: approved, declined, deleted
     */
    protected $status;

    /**
     * @var int|null
     */
    protected $publisherId;

    /**
     * @var int|null
     */
    protected $advertiserId;

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @return null|string
     */
    public function getDateType()
    {
        return $this->dateType;
    }

    /**
     * @param null|string $dateType
     */
    public function setDateType($dateType)
    {
        $this->dateType = $dateType;
    }

    /**
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int|null
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * @param int|null $publisherId
     */
    public function setPublisherId($publisherId)
    {
        $this->publisherId = $publisherId;
    }

    /**
     * @return int|null
     */
    public function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    /**
     * @param int|null $advertiserId
     */
    public function setAdvertiserId($advertiserId)
    {
        $this->advertiserId = $advertiserId;
    }

}