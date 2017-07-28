<?php

namespace FMTCco\Integrations\Apis\ImpactRadius\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Action implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var string
     */
    protected $Id;

    /**
     * @var int
     */
    protected $CampaignId;

    /**
     * @var string
     */
    protected $CampaignName;

    /**
     * @var int
     */
    protected $ActionTrackerId;

    /**
     * @var string
     */
    protected $ActionTrackerName;

    /**
     * @var string
     */
    protected $Status;

    /**
     * @var string
     */
    protected $State;

    /**
     * @var string
     */
    protected $LockedStatus;

    /**
     * @var int
     */
    protected $AdId;

    /**
     * @var float
     */
    protected $Payout;

    /**
     * @var float
     */
    protected $DeltaPayout;

    /**
     * @var float
     */
    protected $IntendedPayout;

    /**
     * @var float
     */
    protected $Amount;

    /**
     * @var float
     */
    protected $DeltaAmount;

    /**
     * @var float
     */
    protected $IntendedAmount;

    /**
     * @var string|null
     */
    protected $Currency;

    /**
     * @var string|null
     */
    protected $ReferringDate;

    /**
     * @var string
     */
    protected $EventDate;

    /**
     * @var string
     */
    protected $CreationDate;

    /**
     * @var string
     */
    protected $LockingDate;

    /**
     * @var string|null
     */
    protected $ClearedDate;

    /**
     * @var string|null
     */
    protected $ReferringType;

    /**
     * @var string|null
     */
    protected $ReferringDomain;

    /**
     * @var string|null
     */
    protected $PromoCode;

    /**
     * @var string|null
     */
    protected $Oid;

    /**
     * n/a is mapped to null
     * @var string|null
     */
    protected $CustomerArea;

    /**
     * @var string|null
     */
    protected $CustomerCity;

    /**
     * @var string|null
     */
    protected $CustomerRegion;

    /**
     * @var string|null
     */
    protected $CustomerCountry;

    /**
     * @var string|null
     */
    protected $SubId1;

    /**
     * @var string|null
     */
    protected $SubId2;

    /**
     * @var string|null
     */
    protected $SubId3;

    /**
     * @var string|null
     */
    protected $SharedId;

    /**
     * @var string
     */
    protected $Uri;


    public function __construct($data = [])
    {
        $this->Id                       = AU::getUnset($data, 'Id');
        $this->CampaignId               = AU::getUnset($data, 'CampaignId');
        $this->CampaignName             = AU::getUnset($data, 'CampaignName');
        $this->ActionTrackerId          = AU::getUnset($data, 'ActionTrackerId');
        $this->ActionTrackerName        = AU::getUnset($data, 'ActionTrackerName');
        $this->Status                   = AU::getUnset($data, 'Status');
        $this->State                    = AU::getUnset($data, 'State');
        $this->LockedStatus             = AU::getUnset($data, 'LockedStatus');
        $this->AdId                     = AU::getUnset($data, 'AdId');
        $this->Payout                   = AU::getUnset($data, 'Payout');
        $this->DeltaPayout              = AU::getUnset($data, 'DeltaPayout');
        $this->IntendedPayout           = AU::getUnset($data, 'IntendedPayout');
        $this->Amount                   = AU::getUnset($data, 'Amount');
        $this->DeltaAmount              = AU::getUnset($data, 'DeltaAmount');
        $this->IntendedAmount           = AU::getUnset($data, 'IntendedAmount');
        $this->Currency                 = AU::getUnset($data, 'Currency');
        $this->ReferringDate            = AU::getUnset($data, 'ReferringDate');
        $this->EventDate                = AU::getUnset($data, 'EventDate');
        $this->CreationDate             = AU::getUnset($data, 'CreationDate');
        $this->LockingDate              = AU::getUnset($data, 'LockingDate');
        $this->ClearedDate              = AU::getUnset($data, 'ClearedDate');
        $this->ReferringType            = AU::getUnset($data, 'ReferringType');
        $this->ReferringDomain          = AU::getUnset($data, 'ReferringDomain');
        $this->PromoCode                = AU::getUnset($data, 'PromoCode');
        $this->Oid                      = AU::getUnset($data, 'Oid');
        $this->CustomerArea             = AU::getUnset($data, 'CustomerArea');
        $this->CustomerCity             = AU::getUnset($data, 'CustomerCity');
        $this->CustomerRegion           = AU::getUnset($data, 'CustomerRegion');
        $this->CustomerCountry          = AU::getUnset($data, 'CustomerCountry');
        $this->SubId1                   = AU::getUnset($data, 'SubId1');
        $this->SubId2                   = AU::getUnset($data, 'SubId2');
        $this->SubId3                   = AU::getUnset($data, 'SubId3');
        $this->SharedId                 = AU::getUnset($data, 'SharedId');
        $this->Uri                      = AU::getUnset($data, 'Uri');

        $this->setUnmappedVariablesFromResponse($data);
    }

    public function clean()
    {

        $this->CampaignId               = intval($this->CampaignId);
        $this->ActionTrackerId          = intval($this->ActionTrackerId);
        $this->AdId                     = intval($this->AdId);
        $this->Payout                   = floatval($this->Payout);
        $this->DeltaPayout              = floatval($this->DeltaPayout);
        $this->IntendedPayout           = floatval($this->IntendedPayout);
        $this->Amount                   = floatval($this->Amount);
        $this->DeltaAmount              = floatval($this->DeltaAmount);
        $this->IntendedAmount           = floatval($this->IntendedAmount);

        if (empty($this->Currency)) {
            $this->Currency             = null;
        }

        if (empty($this->ReferringDate)) {
            $this->ReferringDate        = null;
        }

        if (empty($this->EventDate)) {
            $this->EventDate            = null;
        }

        if (empty($this->CreationDate)) {
            $this->CreationDate         = null;
        }

        if (empty($this->LockingDate)) {
            $this->LockingDate          = null;
        }

        if (empty($this->ClearedDate)) {
            $this->ClearedDate          = null;
        }

        if (empty($this->ReferringDomain)) {
            $this->ReferringDomain      = null;
        }

        if (empty($this->PromoCode)) {
            $this->PromoCode            = null;
        }

        if (empty($this->Oid)) {
            $this->Oid                  = null;
        }

        if (empty($this->CustomerArea) || strtolower($this->CustomerArea) == 'n/a') {
            $this->CustomerArea         = null;
        }

        if (empty($this->CustomerCity)) {
            $this->CustomerCity         = null;
        }

        if (empty($this->CustomerRegion)) {
            $this->CustomerRegion       = null;
        }

        if (empty($this->CustomerCountry)) {
            $this->CustomerCountry      = null;
        }

        if (empty($this->SubId1)) {
            $this->SubId1               = null;
        }

        if (empty($this->SubId2)) {
            $this->SubId2               = null;
        }

        if (empty($this->SubId3)) {
            $this->SubId3               = null;
        }

        if (empty($this->SharedId)) {
            $this->SharedId             = null;
        }
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
        return $this->CampaignName;
    }

    /**
     * @return int
     */
    public function getActionTrackerId()
    {
        return $this->ActionTrackerId;
    }

    /**
     * @return string
     */
    public function getActionTrackerName()
    {
        return $this->ActionTrackerName;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @return string
     */
    public function getLockedStatus()
    {
        return $this->LockedStatus;
    }

    /**
     * @return int
     */
    public function getAdId()
    {
        return $this->AdId;
    }

    /**
     * @return float
     */
    public function getPayout()
    {
        return $this->Payout;
    }

    /**
     * @return float
     */
    public function getDeltaPayout()
    {
        return $this->DeltaPayout;
    }

    /**
     * @return float
     */
    public function getIntendedPayout()
    {
        return $this->IntendedPayout;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @return float
     */
    public function getDeltaAmount()
    {
        return $this->DeltaAmount;
    }

    /**
     * @return float
     */
    public function getIntendedAmount()
    {
        return $this->IntendedAmount;
    }

    /**
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @return null|string
     */
    public function getReferringDate()
    {
        return $this->ReferringDate;
    }

    /**
     * @return string
     */
    public function getEventDate()
    {
        return $this->EventDate;
    }

    /**
     * @return string
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @return string
     */
    public function getLockingDate()
    {
        return $this->LockingDate;
    }

    /**
     * @return null|string
     */
    public function getClearedDate()
    {
        return $this->ClearedDate;
    }

    /**
     * @return null|string
     */
    public function getReferringType()
    {
        return $this->ReferringType;
    }

    /**
     * @return null|string
     */
    public function getReferringDomain()
    {
        return $this->ReferringDomain;
    }

    /**
     * @return null|string
     */
    public function getPromoCode()
    {
        return $this->PromoCode;
    }

    /**
     * @return null|string
     */
    public function getOid()
    {
        return $this->Oid;
    }

    /**
     * @return null|string
     */
    public function getCustomerArea()
    {
        return $this->CustomerArea;
    }

    /**
     * @return null|string
     */
    public function getCustomerCity()
    {
        return $this->CustomerCity;
    }

    /**
     * @return null|string
     */
    public function getCustomerRegion()
    {
        return $this->CustomerRegion;
    }

    /**
     * @return null|string
     */
    public function getCustomerCountry()
    {
        return $this->CustomerCountry;
    }

    /**
     * @return null|string
     */
    public function getSubId1()
    {
        return $this->SubId1;
    }

    /**
     * @return null|string
     */
    public function getSubId2()
    {
        return $this->SubId2;
    }

    /**
     * @return null|string
     */
    public function getSubId3()
    {
        return $this->SubId3;
    }

    /**
     * @return null|string
     */
    public function getSharedId()
    {
        return $this->SharedId;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->Uri;
    }

    /**
     * @return array|null
     */
    public function getUnmappedVariables()
    {
        return $this->unmappedVariables;
    }

}
