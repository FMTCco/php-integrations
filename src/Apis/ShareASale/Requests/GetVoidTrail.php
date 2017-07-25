<?php

namespace FMTCco\Integrations\Apis\ShareASale\Requests;


class GetVoidTrail implements \JsonSerializable
{

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
        $object['dateStart']                = $this->dateStart;
        $object['dateEnd']                  = $this->dateEnd;
        $object['merchantId']               = $this->merchantId;
        $object['XMLFormat']                = $this->XMLFormat;
        $object['format']                   = $this->format;

        return $object;
    }

    /**
     * @return string
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param string $dateStart
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
