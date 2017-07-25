<?php

namespace FMTCco\Integrations\Apis\ImpactRadius\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetActions implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     *
     * @var int|null
     */
    protected $CampaignId;

    /**
     * @var string|null
     */
    protected $State;

    /**
     * e.g. 2017‐01‐01T00%3A00%3A00Z
     * @var string|null
     */
    protected $LockingDateStart;

    /**
     * e.g. 2017‐01‐01T00%3A00%3A00Z
     * @var string|null
     */
    protected $LockingDateEnd;

    /**
     * e.g. 2017‐01‐01T00%3A00%3A00Z
     * @var string|null
     */
    protected $ActionDateEnd;

    /**
     * e.g. 2017‐01‐01T00%3A00%3A00Z
     * @var string|null
     */
    protected $ActionDateStart;

    /**
     * e.g. 2017‐01‐01T00%3A00%3A00Z
     * @var string|null
     */
    protected $StartDate;

    /**
     * e.g. 2017‐01‐01T00%3A00%3A00Z
     * @var string|null
     */
    protected $EndDate;

    /**
     * @var int|null
     */
    protected $Page;

    /**
     * @var int|null
     */
    protected $PageSize;

    /**
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * @param int|null $CampaignId
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param null|string $State
     */
    public function setState($State)
    {
        $this->State = $State;
    }

    /**
     * @return null|string
     */
    public function getLockingDateStart()
    {
        return $this->LockingDateStart;
    }

    /**
     * @param null|string $LockingDateStart
     */
    public function setLockingDateStart($LockingDateStart)
    {
        $this->LockingDateStart = $LockingDateStart;
    }

    /**
     * @return null|string
     */
    public function getLockingDateEnd()
    {
        return $this->LockingDateEnd;
    }

    /**
     * @param null|string $LockingDateEnd
     */
    public function setLockingDateEnd($LockingDateEnd)
    {
        $this->LockingDateEnd = $LockingDateEnd;
    }

    /**
     * @return null|string
     */
    public function getActionDateEnd()
    {
        return $this->ActionDateEnd;
    }

    /**
     * @param null|string $ActionDateEnd
     */
    public function setActionDateEnd($ActionDateEnd)
    {
        $this->ActionDateEnd = $ActionDateEnd;
    }

    /**
     * @return null|string
     */
    public function getActionDateStart()
    {
        return $this->ActionDateStart;
    }

    /**
     * @param null|string $ActionDateStart
     */
    public function setActionDateStart($ActionDateStart)
    {
        $this->ActionDateStart = $ActionDateStart;
    }

    /**
     * @return null|string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param null|string $StartDate
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;
    }

    /**
     * @return null|string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param null|string $EndDate
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;
    }

    /**
     * @return int|null
     */
    public function getPage()
    {
        return $this->Page;
    }

    /**
     * @param int|null $Page
     */
    public function setPage($Page)
    {
        $this->Page = $Page;
    }

    /**
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     * @param int|null $PageSize
     */
    public function setPageSize($PageSize)
    {
        $this->PageSize = $PageSize;
    }
}
