<?php

namespace FMTCco\Integrations\Apis\PepperJam\Requests;


class GetTransactionDetails implements \JsonSerializable
{

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
     * If included, reports will contain the coupons field.
     * Default: false
     *
     * @var bool|null
     */
    protected $includeCoupons;

    /**
     * If included, reports will contain the device type
     * Default: false
     *
     * @var bool|null
     */
    protected $deviceType;

    /**
     * Filters transactions to show new to file or not new to file
     * One of: yes, no
     * @var string|null
     */
    protected $newToFile;

    /**
     * Removes the CSV column headers from the report.
     * Default: false
     *
     * @var bool|null
     */
    protected $removeCsvHeaders;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['startDate']                = $this->startDate;
        $object['endDate']                  = $this->endDate;
        $object['website']                  = $this->website;
        $object['includeCoupons']           = $this->includeCoupons;
        $object['deviceType']               = $this->deviceType;
        $object['newToFile']                = $this->newToFile;
        $object['removeCsvHeaders']         = $this->removeCsvHeaders;

        return $object;
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
     * @return bool|null
     */
    public function getIncludeCoupons()
    {
        return $this->includeCoupons;
    }

    /**
     * @param bool|null $includeCoupons
     */
    public function setIncludeCoupons($includeCoupons)
    {
        $this->includeCoupons = $includeCoupons;
    }

    /**
     * @return bool|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @param bool|null $deviceType
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
    }

    /**
     * @return null|string
     */
    public function getNewToFile()
    {
        return $this->newToFile;
    }

    /**
     * @param null|string $newToFile
     */
    public function setNewToFile($newToFile)
    {
        $this->newToFile = $newToFile;
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
