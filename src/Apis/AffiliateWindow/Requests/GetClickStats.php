<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;


class GetClickStats implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var string|null
     */
    protected $dStartDate;

    /**
     * @var string|null
     */
    protected $dEndDate;

    /**
     * @var string|null
     */
    protected $sDateType;

    /**
     * @var int|null
     */
    protected $iLimit;

    /**
     * @return null|string
     */
    public function getDStartDate()
    {
        return $this->dStartDate;
    }

    /**
     * @param null|string $dStartDate
     */
    public function setDStartDate($dStartDate)
    {
        $this->dStartDate = $dStartDate;
    }

    /**
     * @return null|string
     */
    public function getDEndDate()
    {
        return $this->dEndDate;
    }

    /**
     * @param null|string $dEndDate
     */
    public function setDEndDate($dEndDate)
    {
        $this->dEndDate = $dEndDate;
    }

    /**
     * @return null|string
     */
    public function getSDateType()
    {
        return $this->sDateType;
    }

    /**
     * @param null|string $sDateType
     */
    public function setSDateType($sDateType)
    {
        $this->sDateType = $sDateType;
    }

    /**
     * @return int|null
     */
    public function getILimit()
    {
        return $this->iLimit;
    }

    /**
     * @param int|null $iLimit
     */
    public function setILimit($iLimit)
    {
        $this->iLimit = $iLimit;
    }

}