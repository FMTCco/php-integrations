<?php

namespace FMTCco\Integrations\Apis\PepperJam\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetTransactionSummary implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * Formatted as yyyy-mm-dd
     * The period of time formed by the start date and the end date must not exceed 3 months.
     * **REQUIRED**
     *
     * @var string
     */
    protected $startDate;

    /**
     * Formatted as yyyy-mm-dd
     * The period of time formed by the start date and the end date must not exceed 3 months.
     * **REQUIRED**
     *
     * @var string
     */
    protected $endDate;

    /**
     * If not included, reports will not contain website information.
     * If a website ID is supplied the report will be refined to only contain results relevant to that website and the last column will contain the website URL.
     *
     * @var string|null
     */
    protected $website;

    /**
     * Formatted as yyyy-mm-dd
     * When grouping by date is enabled, the report is broken down by date instead of program.
     * All totals are for the dates listed and individual programs are not listed.
     *
     * @var string|null
     */
    protected $groupBy;

    /**
     * Removes the CSV column headers from the report.
     * Default is false
     *
     * @var bool|null
     */
    protected $removeCsvHeaders;


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
     * @return null|string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param null|string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return null|string
     */
    public function getGroupBy()
    {
        return $this->groupBy;
    }

    /**
     * @param null|string $groupBy
     */
    public function setGroupBy($groupBy)
    {
        $this->groupBy = $groupBy;
    }

    /**
     * @return bool|null
     */
    public function getRemoveCsvHeaders()
    {
        return $this->removeCsvHeaders;
    }

    /**
     * @param bool|null $removeCsvHeaders
     */
    public function setRemoveCsvHeaders($removeCsvHeaders)
    {
        $this->removeCsvHeaders = $removeCsvHeaders;
    }
}
