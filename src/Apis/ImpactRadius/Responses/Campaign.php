<?php

namespace FMTCco\Integrations\Apis\ImpactRadius\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Campaign implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var int
     */
    protected $AdvertiserId;

    /**
     * @var string
     */
    protected $AdvertiserName;

    /**
     * @var string
     */
    protected $AdvertiserUrl;

    /**
     * @var int
     */
    protected $CampaignId;

    /**
     * @var string
     */
    protected $CampaignName;

    /**
     * @var string
     */
    protected $CampaignUrl;

    /**
     * @var string
     */
    protected $CampaignDescription;

    /**
     * @var array
     */
    protected $ShippingRegions;

    /**
     * @var string
     */
    protected $CampaignLogoUri;

    /**
     * @var string
     */
    protected $PublicInsertionOrderUri;

    /**
     * @var string
     */
    protected $InsertionOrderStatus;

    /**
     * @var string
     */
    protected $InsertionOrderUri;

    /**
     * @var string
     */
    protected $TrackingLink;

    /**
     * @var bool
     */
    protected $AllowsDeeplinking;

    /**
     * @var array
     */
    protected $DeeplinkDomains;

    /**
     * @var string
     */
    protected $Uri;


    public function __construct($data = [])
    {
        $this->AdvertiserId             = AU::get($data['AdvertiserId']);
        $this->AdvertiserName           = AU::get($data['AdvertiserName']);
        $this->AdvertiserUrl            = AU::get($data['AdvertiserUrl']);
        $this->CampaignId               = AU::get($data['CampaignId']);
        $this->CampaignName             = AU::get($data['CampaignName']);
        $this->CampaignUrl              = AU::get($data['CampaignUrl']);
        $this->CampaignDescription      = AU::get($data['CampaignDescription']);
        $this->ShippingRegions          = AU::get($data['ShippingRegions']);
        $this->CampaignLogoUri          = AU::get($data['CampaignLogoUri']);
        $this->PublicInsertionOrderUri  = AU::get($data['PublicInsertionOrderUri']);
        $this->InsertionOrderStatus     = AU::get($data['InsertionOrderStatus']);
        $this->InsertionOrderUri        = AU::get($data['InsertionOrderUri']);
        $this->TrackingLink             = AU::get($data['TrackingLink']);
        $this->AllowsDeeplinking        = AU::get($data['AllowsDeeplinking']);
        $this->DeeplinkDomains          = AU::get($data['DeeplinkDomains']);
        $this->Uri                      = AU::get($data['Uri']);
        $this->InsertionOrderStatus     = AU::get($data['InsertionOrderStatus']);
    }

    public function clean()
    {
        $this->AdvertiserId             = intval($this->AdvertiserId);
        $this->CampaignId               = intval($this->CampaignId);
        $this->AllowsDeeplinking        = boolval($this->AllowsDeeplinking);
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->AdvertiserId;
    }

    /**
     * @return string
     */
    public function getAdvertiserName()
    {
        return $this->AdvertiserName;
    }

    /**
     * @return string
     */
    public function getAdvertiserUrl()
    {
        return $this->AdvertiserUrl;
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
     * @return string
     */
    public function getCampaignUrl()
    {
        return $this->CampaignUrl;
    }

    /**
     * @return string
     */
    public function getCampaignDescription()
    {
        return $this->CampaignDescription;
    }

    /**
     * @return array
     */
    public function getShippingRegions()
    {
        return $this->ShippingRegions;
    }

    /**
     * @return string
     */
    public function getCampaignLogoUri()
    {
        return $this->CampaignLogoUri;
    }

    /**
     * @return string
     */
    public function getPublicInsertionOrderUri()
    {
        return $this->PublicInsertionOrderUri;
    }

    /**
     * @return string
     */
    public function getInsertionOrderStatus()
    {
        return $this->InsertionOrderStatus;
    }

    /**
     * @return string
     */
    public function getInsertionOrderUri()
    {
        return $this->InsertionOrderUri;
    }

    /**
     * @return string
     */
    public function getTrackingLink()
    {
        return $this->TrackingLink;
    }

    /**
     * @return bool
     */
    public function isAllowsDeeplinking()
    {
        return $this->AllowsDeeplinking;
    }

    /**
     * @return array
     */
    public function getDeeplinkDomains()
    {
        return $this->DeeplinkDomains;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->Uri;
    }
}
