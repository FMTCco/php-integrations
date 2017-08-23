<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Merchant implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var int
     */
    protected $iId;

    /**
     * @var string
     */
    protected $sName;

    /**
     * @var string
     */
    protected $sDisplayUrl;

    /**
     * @var string
     */
    protected $sClickThroughUrl;

    /**
     * @var PrimaryRegion
     */
    protected $oPrimaryRegion;

    /**
     * @var string|null
     */
    protected $sLogoUrl;


    public function __construct($data = [])
    {
        $this->iId                      = AU::getUnset($data, 'iId');
        $this->sName                    = AU::getUnset($data, 'sName');
        $this->sDisplayUrl              = AU::getUnset($data, 'sDisplayUrl');
        $this->sClickThroughUrl         = AU::getUnset($data, 'sClickThroughUrl');
        $this->oPrimaryRegion           = new PrimaryRegion(AU::getUnset($data, 'oPrimaryRegion'));
        $this->sLogoUrl                 = AU::getUnset($data, 'sLogoUrl');


        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return int
     */
    public function getIId()
    {
        return $this->iId;
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
    public function getSDisplayUrl()
    {
        return $this->sDisplayUrl;
    }

    /**
     * @return string
     */
    public function getSClickThroughUrl()
    {
        return $this->sClickThroughUrl;
    }

    /**
     * @return PrimaryRegion
     */
    public function getOPrimaryRegion()
    {
        return $this->oPrimaryRegion;
    }

    /**
     * @return string|null
     */
    public function getSLogoUrl()
    {
        return $this->sLogoUrl;
    }

}