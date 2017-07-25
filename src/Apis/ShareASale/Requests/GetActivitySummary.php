<?php

namespace FMTCco\Integrations\Apis\ShareASale\Requests;


class GetActivitySummary implements \JsonSerializable
{

    /**
     * Merchant Id Value
     *
     * @var int|null
     */
    protected $merchantId;

    /**
     * One of: hits, sales, commissions
     *
     * @var string|null
     */
    protected $filterCol                    = 'hits';

    /**
     * One of: month, total
     *
     * @var string|null
     */
    protected $filterSpan;

    /**
     * @var int|null
     */
    protected $filterValue;

    /**
     * One of: hitsmonth, salesmonth, salestotal, commissionsmonth, commissionstotal, organization
     *
     * @var string|null
     */
    protected $sortCol                      = 'hitsmonth';

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
     * @return array
     */
    public function jsonSerialize()
    {
        $object['merchantId']               = $this->merchantId;
        $object['filterCol']                = $this->filterCol;
        $object['filterSpan']               = $this->filterSpan;
        $object['filterValue']              = $this->filterValue;
        $object['sortCol']                  = $this->sortCol;
        $object['sortDir']                  = $this->sortDir;
        $object['XMLFormat']                = $this->XMLFormat;
        $object['format']                   = $this->format;

        return $object;
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
    public function getFilterCol()
    {
        return $this->filterCol;
    }

    /**
     * @param null|string $filterCol
     */
    public function setFilterCol($filterCol)
    {
        $this->filterCol = $filterCol;
    }

    /**
     * @return null|string
     */
    public function getFilterSpan()
    {
        return $this->filterSpan;
    }

    /**
     * @param null|string $filterSpan
     */
    public function setFilterSpan($filterSpan)
    {
        $this->filterSpan = $filterSpan;
    }

    /**
     * @return int|null
     */
    public function getFilterValue()
    {
        return $this->filterValue;
    }

    /**
     * @param int|null $filterValue
     */
    public function setFilterValue($filterValue)
    {
        $this->filterValue = $filterValue;
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
