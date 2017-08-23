<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class PrimaryRegion implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var string
     */
    protected $sName;

    /**
     * @var string
     */
    protected $sCountryCode;


    /**
     * @var string
     */
    protected $sCurrencyCode;


    public function __construct($data = [])
    {
        $this->sName                    = AU::getUnset($data, 'sName');
        $this->sCountryCode             = AU::getUnset($data, 'sCountryCode');
        $this->sCurrencyCode            = AU::getUnset($data, 'sCurrencyCode');

        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return string
     */
    public function getSName()
    {
        return $this->sName;
    }

    /**
     * @return string
     */
    public function getSCountryCode()
    {
        return $this->sCountryCode;
    }

    /**
     * @return string
     */
    public function getSCurrencyCode()
    {
        return $this->sCurrencyCode;
    }

}