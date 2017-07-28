<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class ActivitySummary implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


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
        $this->merchantid               = AU::getUnset($data, 'merchantid');
        $this->merchant                 = AU::getUnset($data, 'merchant');
        $this->commissionsmonth         = AU::getUnset($data, 'commissionsmonth');
        $this->commissionstotal         = AU::getUnset($data, 'commissionstotal');
        $this->hitsmonth                = AU::getUnset($data, 'hitsmonth');
        $this->hitstotal                = AU::getUnset($data, 'hitstotal');
        $this->salesmonth               = AU::getUnset($data, 'salesmonth');
        $this->salestotal               = AU::getUnset($data, 'salestotal');
        $this->conversionmonth          = AU::getUnset($data, 'conversionmonth');
        $this->conversiontotal          = AU::getUnset($data, 'conversiontotal');
        $this->epcmonth                 = AU::getUnset($data, 'epcmonth');
        $this->epctotal                 = AU::getUnset($data, 'epctotal');
        $this->merchantstatus           = AU::getUnset($data, 'merchantstatus');
        $this->salecomm                 = AU::getUnset($data, 'salecomm.');
        $this->leadcomm                 = AU::getUnset($data, 'leadcomm.');
        $this->hitcomm                  = AU::getUnset($data, 'hitcomm.');
        $this->numberofsalesmonth       = AU::getUnset($data, 'numberofsalesmonth');
        $this->commissionssalesmonth    = AU::getUnset($data, 'commissionssalesmonth');
        $this->numberofleadsmonth       = AU::getUnset($data, 'numberofleadsmonth');
        $this->commissionsleadsmonth    = AU::getUnset($data, 'commissionsleadsmonth');
        $this->numberoftwotiermonth     = AU::getUnset($data, 'numberoftwotiermonth');
        $this->commissionstwotiermonth  = AU::getUnset($data, 'commissionstwotiermonth');
        $this->numberofbonusesmonth     = AU::getUnset($data, 'numberofbonusesmonth');
        $this->commissionsbonusmonth    = AU::getUnset($data, 'commissionsbonusmonth');
        $this->numberofppcallsmonth     = AU::getUnset($data, 'numberofppcallsmonth');
        $this->commissionsppcallmonth   = AU::getUnset($data, 'commissionsppcallmonth');
        $this->numberofleapfrogsmonth   = AU::getUnset($data, 'numberofleapfrogsmonth');
        $this->commissionsleapfrogmonth = AU::getUnset($data, 'commissionsleapfrogmonth');

        $this->setUnmappedVariablesFromResponse($data);
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
