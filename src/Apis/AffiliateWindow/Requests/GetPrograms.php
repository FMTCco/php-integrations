<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

/**
 * Class GetPrograms
 * @package FMTCco\Integrations\Apis\AffiliateWindow\Requests
 * @see http://wiki.awin.com/index.php/API_get_programmes
 */
class GetPrograms implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var string|null
     * e.g. joined
     */
    protected $relationship;

    /**
     * @var string|null
     * e.g. IE
     */
    protected $countryCode;

    /**
     * @return null|string
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param null|string $relationship
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * @return null|string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param null|string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

}