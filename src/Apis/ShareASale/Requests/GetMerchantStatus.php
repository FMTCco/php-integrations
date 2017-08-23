<?php

namespace FMTCco\Integrations\Apis\ShareASale\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetMerchantStatus implements \JsonSerializable
{

    use SimpleSerializable;


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