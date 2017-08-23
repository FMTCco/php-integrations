<?php

namespace FMTCco\Integrations\Apis\LinkConnector\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Campaign implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;

    /**
     * @var string
     */
    protected $CampaignName;

    /**
     * @var int
     */
    protected $CampaignID;

    /**
     * @var string
     */
    protected $Merchant;

    /**
     * @var int
     */
    protected $MerchantID;

    /**
     * @var string
     */
    protected $BannerLogo;

    /**
     * @var string
     */
    protected $MerchantURL;

    /**
     * @var string
     */
    protected $CampaignType;

    /**
     * @var string
     */
    protected $Events;

    /**
     * @var string
     */
    protected $ProductFeeds;

    /**
     * @var string
     */
    protected $Promotions;

    /**
     * @var int
     */
    protected $SitesApproved;

    /**
     * @var string
     */
    protected $Approved;

    /**
     * @var float
     */
    protected $EPC7Day;

    /**
     * @var float
     */
    protected $EPC30Day;

    /**
     * @var float
     */
    protected $EPC90Day;

    /**
     * @var string
     */
    protected $HTMLDescription;


    public function __construct($data = [])
    {
        $this->CampaignName             = AU::getUnset($data, 'CampaignName');
        $this->CampaignID               = AU::getUnset($data, 'CampaignID');
        $this->Merchant                 = AU::getUnset($data, 'Merchant');
        $this->MerchantID               = AU::getUnset($data, 'MerchantID');
        $this->BannerLogo               = AU::getUnset($data, 'BannerLogo');
        $this->MerchantURL              = AU::getUnset($data, 'MerchantURL');
        $this->CampaignType             = AU::getUnset($data, 'CampaignType');
        $this->Events                   = AU::getUnset($data, 'Events');
        $this->ProductFeeds             = AU::getUnset($data, 'ProductFeeds');
        $this->Promotions               = AU::getUnset($data, 'Promotions');
        $this->SitesApproved            = AU::getUnset($data, 'SitesApproved');
        $this->Approved                 = AU::getUnset($data, 'Approved');
        $this->EPC7Day                  = AU::getUnset($data, 'EPC7Day');
        $this->EPC30Day                 = AU::getUnset($data, 'EPC30Day');
        $this->EPC90Day                 = AU::getUnset($data, 'EPC90Day');
        $this->HTMLDescription          = AU::getUnset($data, 'HTMLDescription');

        $this->setUnmappedVariablesFromResponse($data);
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
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @return string
     */
    public function getMerchant()
    {
        return $this->Merchant;
    }

    /**
     * @return int
     */
    public function getMerchantID()
    {
        return $this->MerchantID;
    }

    /**
     * @return string
     */
    public function getBannerLogo()
    {
        return $this->BannerLogo;
    }

    /**
     * @return string
     */
    public function getMerchantURL()
    {
        return $this->MerchantURL;
    }

    /**
     * @return string
     */
    public function getCampaignType()
    {
        return $this->CampaignType;
    }

    /**
     * @return string
     */
    public function getEvents()
    {
        return $this->Events;
    }

    /**
     * @return string
     */
    public function getProductFeeds()
    {
        return $this->ProductFeeds;
    }

    /**
     * @return string
     */
    public function getPromotions()
    {
        return $this->Promotions;
    }

    /**
     * @return int
     */
    public function getSitesApproved()
    {
        return $this->SitesApproved;
    }

    /**
     * @return string
     */
    public function getApproved()
    {
        return $this->Approved;
    }

    /**
     * @return float
     */
    public function getEPC7Day()
    {
        return $this->EPC7Day;
    }

    /**
     * @return float
     */
    public function getEPC30Day()
    {
        return $this->EPC30Day;
    }

    /**
     * @return float
     */
    public function getEPC90Day()
    {
        return $this->EPC90Day;
    }

    /**
     * @return string
     */
    public function getHTMLDescription()
    {
        return $this->HTMLDescription;
    }

}