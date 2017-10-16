<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Program implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $displayUrl;

    /**
     * @var string
     */
    protected $clickThroughUrl;

    /**
     * @var string
     */
    protected $logoUrl;

    /**
     * @var PrimaryRegion
     */
    protected $primaryRegion;

    /**
     * @var string
     */
    protected $currencyCode;

    /**
     * @var string[]
     */
    protected $validDomains;


    public function __construct($data = [])
    {
        $this->id                       = AU::getUnset($data, 'id');
        $this->name                     = AU::getUnset($data, 'name');
        $this->displayUrl               = AU::getUnset($data, 'displayUrl');
        $this->clickThroughUrl          = AU::getUnset($data, 'clickThroughUrl');
        $this->logoUrl                  = AU::getUnset($data, 'logoUrl');
        $this->primaryRegion            = new PrimaryRegion(AU::getUnset($data, 'primaryRegion'));
        $this->currencyCode             = AU::getUnset($data, 'currencyCode');

        $this->validDomains             = [];
        $validDomains                   = AU::getUnset($data, 'validDomains', []);

        foreach ($validDomains AS $item)
        {
            if (!isset($item['domain']))
                continue;

            $this->validDomains[]       = $item['domain'];
        }

        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getDisplayUrl()
    {
        return $this->displayUrl;
    }

    /**
     * @param string $displayUrl
     */
    public function setDisplayUrl($displayUrl)
    {
        $this->displayUrl = $displayUrl;
    }

    /**
     * @return string
     */
    public function getClickThroughUrl()
    {
        return $this->clickThroughUrl;
    }

    /**
     * @param string $clickThroughUrl
     */
    public function setClickThroughUrl($clickThroughUrl)
    {
        $this->clickThroughUrl = $clickThroughUrl;
    }

    /**
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * @param string $logoUrl
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;
    }

    /**
     * @return PrimaryRegion
     */
    public function getPrimaryRegion()
    {
        return $this->primaryRegion;
    }

    /**
     * @param PrimaryRegion $primaryRegion
     */
    public function setPrimaryRegion($primaryRegion)
    {
        $this->primaryRegion = $primaryRegion;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string[]
     */
    public function getValidDomains()
    {
        return $this->validDomains;
    }

    /**
     * @param string[] $validDomains
     */
    public function setValidDomains($validDomains)
    {
        $this->validDomains = $validDomains;
    }

}