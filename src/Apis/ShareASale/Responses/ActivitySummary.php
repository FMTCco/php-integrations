<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class ActivitySummary implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int
     */
    protected $merchantid;

    /**
     * @var string
     */
    protected $merchant;

    /**
     * @var float
     */
    protected $commissionsmonth;

    /**
     * @var float
     */
    protected $commissionstotal;

    /**
     * @var int
     */
    protected $hitsmonth;

    /**
     * @var int
     */
    protected $hitstotal;

    /**
     * @var int
     */
    protected $salesmonth;

    /**
     * @var int
     */
    protected $salestotal;

    /**
     * @var string
     */
    protected $conversionmonth;

    /**
     * @var float
     */
    protected $conversiontotal;

    /**
     * @var float
     */
    protected $epcmonth;

    /**
     * @var float
     */
    protected $epctotal;

    /**
     * @var string
     */
    protected $merchantstatus;

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
     * @var int
     */
    protected $numberofsalesmonth;

    /**
     * @var float
     */
    protected $commissionssalesmonth;

    /**
     * @var int
     */
    protected $numberofleadsmonth;

    /**
     * @var float
     */
    protected $commissionsleadsmonth;

    /**
     * @var int
     */
    protected $numberoftwotiermonth;

    /**
     * @var float
     */
    protected $commissionstwotiermonth;

    /**
     * @var int
     */
    protected $numberofbonusesmonth;

    /**
     * @var float
     */
    protected $commissionsbonusmonth;

    /**
     * @var int
     */
    protected $numberofppcallsmonth;

    /**
     * @var float
     */
    protected $commissionsppcallmonth;

    /**
     * @var int
     */
    protected $numberofleapfrogsmonth;

    /**
     * @var float
     */
    protected $commissionsleapfrogmonth;


    public function __construct($data = [])
    {
        $this->merchantid               = AU::get($data['merchantid']);
        $this->merchant                 = AU::get($data['merchant']);
        $this->commissionsmonth         = AU::get($data['commissionsmonth']);
        $this->commissionstotal         = AU::get($data['commissionstotal']);
        $this->hitsmonth                = AU::get($data['hitsmonth']);
        $this->hitstotal                = AU::get($data['hitstotal']);
        $this->salesmonth               = AU::get($data['salesmonth']);
        $this->salestotal               = AU::get($data['salestotal']);
        $this->conversionmonth          = AU::get($data['conversionmonth']);
        $this->conversiontotal          = AU::get($data['conversiontotal']);
        $this->epcmonth                 = AU::get($data['epcmonth']);
        $this->epctotal                 = AU::get($data['epctotal']);
        $this->merchantstatus           = AU::get($data['merchantstatus']);
        $this->salecomm                 = AU::get($data['salecomm.']);
        $this->leadcomm                 = AU::get($data['leadcomm.']);
        $this->hitcomm                  = AU::get($data['hitcomm.']);
        $this->numberofsalesmonth       = AU::get($data['numberofsalesmonth']);
        $this->commissionssalesmonth    = AU::get($data['commissionssalesmonth']);
        $this->numberofleadsmonth       = AU::get($data['numberofleadsmonth']);
        $this->commissionsleadsmonth    = AU::get($data['commissionsleadsmonth']);
        $this->numberoftwotiermonth     = AU::get($data['numberoftwotiermonth']);
        $this->commissionstwotiermonth  = AU::get($data['commissionstwotiermonth']);
        $this->numberofbonusesmonth     = AU::get($data['numberofbonusesmonth']);
        $this->commissionsbonusmonth    = AU::get($data['commissionsbonusmonth']);
        $this->numberofppcallsmonth     = AU::get($data['numberofppcallsmonth']);
        $this->commissionsppcallmonth   = AU::get($data['commissionsppcallmonth']);
        $this->numberofleapfrogsmonth   = AU::get($data['numberofleapfrogsmonth']);
        $this->commissionsleapfrogmonth = AU::get($data['commissionsleapfrogmonth']);
    }

    public function clean()
    {
        $this->merchantid               = intval($this->merchantid);
        $this->commissionsmonth         = floatval($this->commissionsmonth);
        $this->commissionstotal         = floatval($this->commissionstotal);
        $this->hitsmonth                = intval($this->hitsmonth);
        $this->hitstotal                = intval($this->hitstotal);
        $this->salesmonth               = intval($this->salesmonth);
        $this->salestotal               = intval($this->salestotal);
        $this->conversiontotal          = floatval($this->conversiontotal);
        $this->epcmonth                 = floatval($this->epcmonth);
        $this->epctotal                 = floatval($this->epctotal);

        if (empty($this->salecomm)) {
            $this->salecomm             = null;
        }

        if (empty($this->leadcomm)) {
            $this->leadcomm             = null;
        }

        if (empty($this->hitcomm)) {
            $this->hitcomm              = null;
        }

        $this->numberofsalesmonth       = intval($this->numberofsalesmonth);
        $this->commissionssalesmonth    = floatval($this->commissionssalesmonth);
        $this->numberofleadsmonth       = intval($this->numberofleadsmonth);
        $this->commissionsleadsmonth    = floatval($this->commissionsleadsmonth);
        $this->numberoftwotiermonth     = intval($this->numberoftwotiermonth);
        $this->commissionstwotiermonth  = floatval($this->commissionstwotiermonth);
        $this->numberofbonusesmonth     = intval($this->numberofbonusesmonth);
        $this->commissionsbonusmonth    = floatval($this->commissionsbonusmonth);
        $this->numberofppcallsmonth     = intval($this->numberofppcallsmonth);
        $this->commissionsppcallmonth   = floatval($this->commissionsppcallmonth);
        $this->numberofleapfrogsmonth   = intval($this->numberofleapfrogsmonth);
        $this->commissionsleapfrogmonth = floatval($this->commissionsleapfrogmonth);
    }

    /**
     * @return int
     */
    public function getMerchantid()
    {
        return $this->merchantid;
    }

    /**
     * @return string
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @return float
     */
    public function getCommissionsmonth()
    {
        return $this->commissionsmonth;
    }

    /**
     * @return float
     */
    public function getCommissionstotal()
    {
        return $this->commissionstotal;
    }

    /**
     * @return int
     */
    public function getHitsmonth()
    {
        return $this->hitsmonth;
    }

    /**
     * @return int
     */
    public function getHitstotal()
    {
        return $this->hitstotal;
    }

    /**
     * @return int
     */
    public function getSalesmonth()
    {
        return $this->salesmonth;
    }

    /**
     * @return int
     */
    public function getSalestotal()
    {
        return $this->salestotal;
    }

    /**
     * @return string
     */
    public function getConversionmonth()
    {
        return $this->conversionmonth;
    }

    /**
     * @return float
     */
    public function getConversiontotal()
    {
        return $this->conversiontotal;
    }

    /**
     * @return float
     */
    public function getEpcmonth()
    {
        return $this->epcmonth;
    }

    /**
     * @return float
     */
    public function getEpctotal()
    {
        return $this->epctotal;
    }

    /**
     * @return string
     */
    public function getMerchantstatus()
    {
        return $this->merchantstatus;
    }

    /**
     * @return string|null
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
     * @return int
     */
    public function getNumberofsalesmonth()
    {
        return $this->numberofsalesmonth;
    }

    /**
     * @return float
     */
    public function getCommissionssalesmonth()
    {
        return $this->commissionssalesmonth;
    }

    /**
     * @return int
     */
    public function getNumberofleadsmonth()
    {
        return $this->numberofleadsmonth;
    }

    /**
     * @return float
     */
    public function getCommissionsleadsmonth()
    {
        return $this->commissionsleadsmonth;
    }

    /**
     * @return int
     */
    public function getNumberoftwotiermonth()
    {
        return $this->numberoftwotiermonth;
    }

    /**
     * @return float
     */
    public function getCommissionstwotiermonth()
    {
        return $this->commissionstwotiermonth;
    }

    /**
     * @return int
     */
    public function getNumberofbonusesmonth()
    {
        return $this->numberofbonusesmonth;
    }

    /**
     * @return float
     */
    public function getCommissionsbonusmonth()
    {
        return $this->commissionsbonusmonth;
    }

    /**
     * @return int
     */
    public function getNumberofppcallsmonth()
    {
        return $this->numberofppcallsmonth;
    }

    /**
     * @return float
     */
    public function getCommissionsppcallmonth()
    {
        return $this->commissionsppcallmonth;
    }

    /**
     * @return int
     */
    public function getNumberofleapfrogsmonth()
    {
        return $this->numberofleapfrogsmonth;
    }

    /**
     * @return float
     */
    public function getCommissionsleapfrogmonth()
    {
        return $this->commissionsleapfrogmonth;
    }
}
