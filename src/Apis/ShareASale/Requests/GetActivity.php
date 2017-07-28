<?php

namespace FMTCco\Integrations\Apis\ShareASale\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetActivity implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * Formatted as mm/dd/yyyy
     * **Required**
     * @var string
     */
    protected $dateStart;

    /**
     * Formatted as mm/dd/yyyy
     * @var string|null
     */
    protected $dateEnd;

    /**
     * Merchant Id Value
     * @var int|null
     */
    protected $merchantId;

    /**
     * Formatted as mm/dd/yyyy
     * @var string|null
     */
    protected $lockDate;

    /**
     * Formatted as mm/dd/yyyy
     * @var string|null
     */
    protected $paidDate;

    /**
     * One of: transdate, transId, commission, merchantId, status, commission, comment
     * @var string|null
     */
    protected $sortCol                      = 'transId';

    /**
     * One of: asc, desc
     * @var string|null
     */
    protected $sortDir                      = 'asc';

    /**
     * One of: 0, 1
     * @var int|null
     */
    protected $XMLFormat                    = 1;

    /**
     * One of: pipe, xml, csv
     * @var string|null
     */
    protected $format                       = 'xml';


    /**
     * @return null|string
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param null|string $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * @return null|string
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param null|string $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * @return int|null
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param int|null $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return null|string
     */
    public function getLockDate()
    {
        return $this->lockDate;
    }

    /**
     * @param null|string $lockDate
     */
    public function setLockDate($lockDate)
    {
        $this->lockDate = $lockDate;
    }

    /**
     * @return null|string
     */
    public function getPaidDate()
    {
        return $this->paidDate;
    }

    /**
     * @param null|string $paidDate
     */
    public function setPaidDate($paidDate)
    {
        $this->paidDate = $paidDate;
    }

    /**
     * @return null|string
     */
    public function getSortCol()
    {
        return $this->sortCol;
    }

    /**
     * @param null|string $sortCol
     */
    public function setSortCol($sortCol)
    {
        $this->sortCol = $sortCol;
    }

    /**
     * @return null|string
     */
    public function getSortDir()
    {
        return $this->sortDir;
    }

    /**
     * @param null|string $sortDir
     */
    public function setSortDir($sortDir)
    {
        $this->sortDir = $sortDir;
    }

    /**
     * @return int|null
     */
    public function getXMLFormat()
    {
        return $this->XMLFormat;
    }

    /**
     * @param int|null $XMLFormat
     */
    public function setXMLFormat($XMLFormat)
    {
        $this->XMLFormat = $XMLFormat;
    }

    /**
     * @return null|string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param null|string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }
}
