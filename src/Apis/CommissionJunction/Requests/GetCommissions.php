<?php

namespace FMTCco\Integrations\Apis\CommissionJunction\Requests;


class GetCommissions implements \JsonSerializable
{

    /**
     * Use this parameter to specify the date
     * parameter as either the event date or the posting date. Options include the following
     * One of: event, posting
     *
     * @var string
     */
    protected $date_type;

    /**
     * Use this parameter to specify the first date included in your query
     * (1­day minimum, 31 days maximum).
     *
     * @var string|null
     */
    protected $start_date;

    /**
     * Use this parameter to specify the last date included in your query
     * (1­day minimum, 31 days maximum).
     *
     * @var string|null
     */
    protected $end_date;

    /**
     * Use this parameter to specify the CID of the joined advertiser or publisher
     * @var string|null
     */
    protected $cids;

    /**
     * Use this parameter to specify a specific type of action
     * One of: bonus, click, impression, sale, lead, advanced sale, advanced lead, performance incentive
     *
     * @var string|null
     */
    protected $action_types;

    /**
     * Use this parameter to specify IDs for specifics Ad IDs
     *
     * @var string|null
     */
    protected $aids;

    /**
     * Use this parameter to specify actions of a particular status.
     * Options include the following: new, locked, extended, closed
     *
     * @var string|null
     */
    protected $action­status;

    /**
     * Use this parameter to specify the Commission ID
     *
     * @var int|null
     */
    protected $commission_id;

    /**
     * Use this parameter to specify a particular Web site or set of Web sites.
     *
     * @var string|null
     */
    protected $website_ids;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['date-type']                = $this->date_type;
        $object['start-date']               = $this->start_date;
        $object['end-date']                 = $this->end_date;
        $object['cids']                     = $this->cids;
        $object['action-types']             = $this->action_types;
        $object['aids']                     = $this->aids;
        $object['action-status']            = $this->action­status;
        $object['commission-id']            = $this->commission_id;
        $object['website-ids']              = $this->website_ids;

        return $object;
    }

    /**
     * @return string
     */
    public function getDateType()
    {
        return $this->date_type;
    }

    /**
     * @param string $date_type
     */
    public function setDateType($date_type)
    {
        $this->date_type = $date_type;
    }

    /**
     * @return null|string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param null|string $start_date
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;
    }

    /**
     * @return null|string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param null|string $end_date
     */
    public function setEndDate($end_date)
    {
        $this->end_date = $end_date;
    }

    /**
     * @return null|string
     */
    public function getCids()
    {
        return $this->cids;
    }

    /**
     * @param null|string $cids
     */
    public function setCids($cids)
    {
        $this->cids = $cids;
    }

    /**
     * @return null|string
     */
    public function getActionTypes()
    {
        return $this->action_types;
    }

    /**
     * @param null|string $action_types
     */
    public function setActionTypes($action_types)
    {
        $this->action_types = $action_types;
    }

    /**
     * @return null|string
     */
    public function getAids()
    {
        return $this->aids;
    }

    /**
     * @param null|string $aids
     */
    public function setAids($aids)
    {
        $this->aids = $aids;
    }

    /**
     * @return null|string
     */
    public function getAction­status()
    {
        return $this->action­status;
    }

    /**
     * @param null|string $action­status
     */
    public function setAction­status($action­status)
    {
        $this->action­status = $action­status;
    }

    /**
     * @return int|null
     */
    public function getCommissionId()
    {
        return $this->commission_id;
    }

    /**
     * @param int|null $commission_id
     */
    public function setCommissionId($commission_id)
    {
        $this->commission_id = $commission_id;
    }

    /**
     * @return null|string
     */
    public function getWebsiteIds()
    {
        return $this->website_ids;
    }

    /**
     * @param null|string $website_ids
     */
    public function setWebsiteIds($website_ids)
    {
        $this->website_ids = $website_ids;
    }
}
