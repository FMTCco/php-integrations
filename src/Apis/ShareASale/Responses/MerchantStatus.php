<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class MerchantStatus implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var int
     */
    protected $merchantid;

    /**
     * @var string|null
     */
    protected $merchant;

    /**
     * @var string|null
     */
    protected $www;

    /**
     * @var string
     */
    protected $programstatus;

    /**
     * @var string
     */
    protected $programcategory;

    /**
     * @var string|null
     */
    protected $salecomm;

    /**
     * @var string|null
     */
    protected $leadcomm;

    /**
     * @var string|null
     */
    protected $hitcomm;

    /**
     * @var string
     */
    protected $approved;

    /**
     * @var string
     */
    protected $linkurl;

    /**
     * @var string|null
     */
    protected $storenames;

    /**
     * @var string|null
     */
    protected $storeids;

    /**
     * @var string|null
     */
    protected $storewwws;

    /**
     * @var string|null
     */
    protected $storesalecomms;

    /**
     * @var string|null
     */
    protected $storelinkurls;

    /**
     * @var string|null
     */
    protected $rulecommissiondate;

    /**
     * @var string|null
     */
    protected $conversionlinedate;


    public function __construct($data = [])
    {
        $this->merchantid                   = AU::getUnset($data, 'merchantid');
        $this->merchant                     = AU::getUnset($data, 'merchant');
        $this->www                          = AU::getUnset($data, 'www');
        $this->programstatus                = AU::getUnset($data, 'programstatus');
        $this->programcategory              = AU::getUnset($data, 'programcategory');
        $this->salecomm                     = AU::getUnset($data, 'salecomm');
        $this->leadcomm                     = AU::getUnset($data, 'leadcomm');
        $this->hitcomm                      = AU::getUnset($data, 'hitcomm');
        $this->approved                     = AU::getUnset($data, 'approved');
        $this->linkurl                      = AU::getUnset($data, 'linkurl');
        $this->storenames                   = AU::getUnset($data, 'storenames');
        $this->storeids                     = AU::getUnset($data, 'storeids');
        $this->storewwws                    = AU::getUnset($data, 'storewwws');
        $this->storesalecomms               = AU::getUnset($data, 'storesalecomms');
        $this->storelinkurls                = AU::getUnset($data, 'storelinkurls');
        $this->rulecommissiondate           = AU::getUnset($data, 'rulecommissiondate');
        $this->conversionlinedate           = AU::getUnset($data, 'conversionlinedate');


        if (empty($this->programcategory))
            $this->programcategory          = null;

        if (empty($this->merchant))
            $this->merchant                 = null;

        if (empty($this->www))
            $this->www                      = null;

        if (empty($this->salecomm))
            $this->salecomm                 = null;

        if (empty($this->leadcomm))
            $this->leadcomm                 = null;

        if (empty($this->hitcomm))
            $this->hitcomm                  = null;

        if (empty($this->storenames))
            $this->storenames               = null;

        if (empty($this->storeids))
            $this->storeids                 = null;

        if (empty($this->storewwws))
            $this->storewwws                = null;

        if (empty($this->storesalecomms))
            $this->storesalecomms           = null;

        if (empty($this->storelinkurls))
            $this->storelinkurls            = null;

        if (empty($this->rulecommissiondate))
            $this->rulecommissiondate       = null;

        if (empty($this->conversionlinedate))
            $this->conversionlinedate       = null;
    }

    /**
     * @return int
     */
    public function getMerchantid()
    {
        return $this->merchantid;
    }

    /**
     * @return null|string
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @return null|string
     */
    public function getWww()
    {
        return $this->www;
    }

    /**
     * @return string
     */
    public function getProgramstatus()
    {
        return $this->programstatus;
    }

    /**
     * @return string
     */
    public function getProgramcategory()
    {
        return $this->programcategory;
    }

    /**
     * @return null|string
     */
    public function getSalecomm()
    {
        return $this->salecomm;
    }

    /**
     * @return null|string
     */
    public function getLeadcomm()
    {
        return $this->leadcomm;
    }

    /**
     * @return null|string
     */
    public function getHitcomm()
    {
        return $this->hitcomm;
    }

    /**
     * @return string
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * @return string
     */
    public function getLinkurl()
    {
        return $this->linkurl;
    }

    /**
     * @return null|string
     */
    public function getStorenames()
    {
        return $this->storenames;
    }

    /**
     * @return null|string
     */
    public function getStoreids()
    {
        return $this->storeids;
    }

    /**
     * @return null|string
     */
    public function getStorewwws()
    {
        return $this->storewwws;
    }

    /**
     * @return null|string
     */
    public function getStoresalecomms()
    {
        return $this->storesalecomms;
    }

    /**
     * @return null|string
     */
    public function getStorelinkurls()
    {
        return $this->storelinkurls;
    }

    /**
     * @return null|string
     */
    public function getRulecommissiondate()
    {
        return $this->rulecommissiondate;
    }

    /**
     * @return null|string
     */
    public function getConversionlinedate()
    {
        return $this->conversionlinedate;
    }


}