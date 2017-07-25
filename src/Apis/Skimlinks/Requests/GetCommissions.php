<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Requests;


/**
 * Class GetCommissions
 * @see     https://api-reports.skimlinks.com/doc/#reportcommissions
 * @package App\Toolkit\NetworkConnections\Apis\Skimlinks\Requests
 */
class GetCommissions implements \JsonSerializable
{

    /**
     * Required
     * The date at which to end the commission report - YYYY-mm-dd
     * @var string
     */
    protected $endDate;

    /**
     * Required
     * The date at which to begin the commission report - YYYY-mm-dd
     * Minimum date - 2011-12-01
     * @var string
     */
    protected $startDate;

    /**
     * List only a single commission with the given ID - int
     * @var int|null
     */
    protected $commissionID;

    /**
     * When set to 'cancelled', only cancelled commissions in the time range will be returned
     * When set to 'active', only active commissions will be returned
     * @var string|null
     */
    protected $status;

    /**
     * List only commissions generated by a specific domain.
     * To get the domainID take the second part of the Skimlinks publisherID for the domain in question.
     * For example, if your Skimlinks publisherID for mysite.com is 13125X742327, you would use 742327 as the domainID
     * @var int|null
     */
    protected $domainID;

    /**
     * The format of the response either xml or json.
     * Default value is xml.
     * @var string
     */
    protected $format               = 'json';

    /**
     * List only commissions with a specific custom ID (an ID given by the publisher to mark a
     * commission). Known as xcust in Link API
     * @var string|null
     */
    protected $customID;

    /**
     * If you are a SkimBox user with a previously created API key, you may choose to report the
     * commissions associated with one of the multiple publishers created using the SkimBox API. In this
     * case, your publisher ID will be the first part of the Skimlinks publisher ID
     * @var int|null
     */
    protected $publisherID;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['endDate']                  = $this->endDate;
        $object['startDate']                = $this->startDate;
        $object['commissionID']             = $this->commissionID;
        $object['status']                   = $this->status;
        $object['domainID']                 = $this->domainID;
        $object['format']                   = $this->format;
        $object['customID']                 = $this->customID;
        $object['publisherID']              = $this->publisherID;

        return $object;
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
     * @return int|null
     */
    public function getCommissionID()
    {
        return $this->commissionID;
    }

    /**
     * @param int|null $commissionID
     */
    public function setCommissionID($commissionID)
    {
        $this->commissionID = $commissionID;
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
    public function getDomainID()
    {
        return $this->domainID;
    }

    /**
     * @param int|null $domainID
     */
    public function setDomainID($domainID)
    {
        $this->domainID = $domainID;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return null|string
     */
    public function getCustomID()
    {
        return $this->customID;
    }

    /**
     * @param null|string $customID
     */
    public function setCustomID($customID)
    {
        $this->customID = $customID;
    }

    /**
     * @return int|null
     */
    public function getPublisherID()
    {
        return $this->publisherID;
    }

    /**
     * @param int|null $publisherID
     */
    public function setPublisherID($publisherID)
    {
        $this->publisherID = $publisherID;
    }

}