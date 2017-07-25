<?php

namespace FMTCco\Integrations\Apis\ImpactRadius\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Action implements \JsonSerializable
{

    use SimpleSerializable;


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
    protected $State;

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
        $this->Id                       = AU::get($data['Id']);
        $this->CampaignId               = AU::get($data['CampaignId']);
        $this->CampaignName             = AU::get($data['CampaignName']);
        $this->ActionTrackerId          = AU::get($data['ActionTrackerId']);
        $this->ActionTrackerName        = AU::get($data['ActionTrackerName']);
        $this->State                    = AU::get($data['State']);
        $this->AdId                     = AU::get($data['AdId']);
        $this->Payout                   = AU::get($data['Payout']);
        $this->DeltaPayout              = AU::get($data['DeltaPayout']);
        $this->IntendedPayout           = AU::get($data['IntendedPayout']);
        $this->Amount                   = AU::get($data['Amount']);
        $this->DeltaAmount              = AU::get($data['DeltaAmount']);
        $this->IntendedAmount           = AU::get($data['IntendedAmount']);
        $this->Currency                 = AU::get($data['Currency']);
        $this->ReferringDate            = AU::get($data['ReferringDate']);
        $this->EventDate                = AU::get($data['EventDate']);
        $this->CreationDate             = AU::get($data['CreationDate']);
        $this->LockingDate              = AU::get($data['LockingDate']);
        $this->ClearedDate              = AU::get($data['ClearedDate']);
        $this->ReferringType            = AU::get($data['ReferringType']);
        $this->ReferringDomain          = AU::get($data['ReferringDomain']);
        $this->PromoCode                = AU::get($data['PromoCode']);
        $this->Oid                      = AU::get($data['Oid']);
        $this->CustomerArea             = AU::get($data['CustomerArea']);
        $this->CustomerCity             = AU::get($data['CustomerCity']);
        $this->CustomerRegion           = AU::get($data['CustomerRegion']);
        $this->CustomerCountry          = AU::get($data['CustomerCountry']);
        $this->SubId1                   = AU::get($data['SubId1']);
        $this->SubId2                   = AU::get($data['SubId2']);
        $this->SubId3                   = AU::get($data['SubId3']);
        $this->SharedId                 = AU::get($data['SharedId']);
        $this->Uri                      = AU::get($data['Uri']);
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
    public function getState()
    {
        return $this->State;
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
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @return string|null
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
     * @return string|null
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
     * @return string|null
     */
    public function getCustomerCity()
    {
        return $this->CustomerCity;
    }

    /**
     * @return string|null
     */
    public function getCustomerRegion()
    {
        return $this->CustomerRegion;
    }

    /**
     * @return string|null
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
}
