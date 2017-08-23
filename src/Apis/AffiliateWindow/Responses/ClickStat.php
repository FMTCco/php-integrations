<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class ClickStat implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var string
     */
    protected $sLinkName;

    /**
     * @var string
     */
    protected $sLinkType;

    /**
     * @var string
     */
    protected $sMerchantName;

    /**
     * @var int
     */
    protected $iPendingCount;

    /**
     * @var Value
     */
    protected $mPendingValue;

    /**
     * @var Value
     */
    protected $mPendingCommission;

    /**
     * @var int
     */
    protected $iConfirmedCount;

    /**
     * @var Value
     */
    protected $mConfirmedValue;

    /**
     * @var Value
     */
    protected $mConfirmedCommission;

    /**
     * @var int
     */
    protected $iDeclinedCount;

    /**
     * @var Value
     */
    protected $mDeclinedValue;

    /**
     * @var Value
     */
    protected $mDeclinedCommission;

    /**
     * @var int
     */
    protected $iClicks;


    public function __construct($data = [])
    {
        $this->sLinkName                = AU::getUnset($data, 'sLinkName');
        $this->sLinkType                = AU::getUnset($data, 'sLinkType');
        $this->sMerchantName            = AU::getUnset($data, 'sMerchantName');
        $this->iPendingCount            = AU::getUnset($data, 'iPendingCount');
        $this->mPendingValue            = new Value(AU::getUnset($data, 'mPendingValue'));
        $this->mPendingCommission       = new Value(AU::getUnset($data, 'mPendingCommission'));
        $this->iConfirmedCount          = AU::getUnset($data, 'iConfirmedCount');
        $this->mConfirmedValue          = new Value(AU::getUnset($data, 'mConfirmedValue'));
        $this->mConfirmedCommission     = new Value(AU::getUnset($data, 'mConfirmedCommission'));
        $this->iDeclinedCount           = AU::getUnset($data, 'iDeclinedCount');
        $this->mDeclinedValue           = new Value(AU::getUnset($data, 'mDeclinedValue'));
        $this->mDeclinedCommission      = new Value(AU::getUnset($data, 'mDeclinedCommission'));
        $this->iClicks                  = AU::getUnset($data, 'iClicks');

        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return string
     */
    public function getSLinkName()
    {
        return $this->sLinkName;
    }

    /**
     * @return string
     */
    public function getSLinkType()
    {
        return $this->sLinkType;
    }

    /**
     * @return string
     */
    public function getSMerchantName()
    {
        return $this->sMerchantName;
    }

    /**
     * @return int
     */
    public function getIPendingCount()
    {
        return $this->iPendingCount;
    }

    /**
     * @return Value
     */
    public function getMPendingValue()
    {
        return $this->mPendingValue;
    }

    /**
     * @return Value
     */
    public function getMPendingCommission()
    {
        return $this->mPendingCommission;
    }

    /**
     * @return int
     */
    public function getIConfirmedCount()
    {
        return $this->iConfirmedCount;
    }

    /**
     * @return Value
     */
    public function getMConfirmedValue()
    {
        return $this->mConfirmedValue;
    }

    /**
     * @return Value
     */
    public function getMConfirmedCommission()
    {
        return $this->mConfirmedCommission;
    }

    /**
     * @return int
     */
    public function getIDeclinedCount()
    {
        return $this->iDeclinedCount;
    }

    /**
     * @return Value
     */
    public function getMDeclinedValue()
    {
        return $this->mDeclinedValue;
    }

    /**
     * @return Value
     */
    public function getMDeclinedCommission()
    {
        return $this->mDeclinedCommission;
    }

    /**
     * @return int
     */
    public function getIClicks()
    {
        return $this->iClicks;
    }

}