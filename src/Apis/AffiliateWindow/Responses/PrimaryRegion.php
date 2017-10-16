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
    protected $name;

    /**
     * @var string
     */
    protected $countryCode;


    public function __construct($data = [])
    {
        $this->name                     = AU::getUnset($data, 'name');
        $this->countryCode              = AU::getUnset($data, 'countryCode');
        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

}