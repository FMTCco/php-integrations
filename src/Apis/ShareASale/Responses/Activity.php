<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Activity implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int
     */
    protected $transid;

    /**
     * @var int
     */
    protected $userid;

    /**
     * @var int
     */
    protected $merchantid;

    /**
     * @var string
     */
    protected $transdate;

    /**
     * @var float
     */
    protected $transamount;

    /**
     * @var float
     */
    protected $commission;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @var bool
     */
    protected $voided;

    /**
     * @var string|null
     */
    protected $pendingdate;

    /**
     * @var bool
     */
    protected $locked;

    /**
     * @var string|null
     */
    protected $affcomment;

    /**
     * @var string|null
     */
    protected $bannerpage;

    /**
     * @var string|null
     */
    protected $reversaldate;

    /**
     * @var string|null
     */
    protected $clickdate;

    /**
     * @var string|null
     */
    protected $clicktime;

    /**
     * @var int
     */
    protected $bannerid;

    /**
     * @var string|null
     */
    protected $skulist;

    /**
     * @var int|null
     */
    protected $quantitylist;

    /**
     * @var string|null
     */
    protected $lockdate;

    /**
     * @var string|null
     */
    protected $paiddate;

    /**
     * @var string
     */
    protected $merchantorganization;

    /**
     * @var string
     */
    protected $merchantwebsite;

    /**
     * @var string
     */
    protected $transtype;


    public function __construct($data = [])
    {
        $this->transid                  = AU::get($data['transid']);
        $this->userid                   = AU::get($data['userid']);
        $this->merchantid               = AU::get($data['merchantid']);
        $this->transdate                = AU::get($data['transdate']);
        $this->transamount              = AU::get($data['transamount']);
        $this->commission               = AU::get($data['commission']);
        $this->comment                  = AU::get($data['comment']);
        $this->voided                   = AU::get($data['voided']);
        $this->pendingdate              = AU::get($data['pendingdate']);
        $this->locked                   = AU::get($data['locked']);
        $this->affcomment               = AU::get($data['affcomment']);
        $this->bannerpage               = AU::get($data['bannerpage']);
        $this->reversaldate             = AU::get($data['reversaldate']);
        $this->clickdate                = AU::get($data['clickdate']);
        $this->clicktime                = AU::get($data['clicktime']);
        $this->bannerid                 = AU::get($data['bannerid']);
        $this->skulist                  = AU::get($data['skulist']);
        $this->quantitylist             = AU::get($data['quantitylist']);
        $this->lockdate                 = AU::get($data['lockdate']);
        $this->paiddate                 = AU::get($data['paiddate']);
        $this->merchantorganization     = AU::get($data['merchantorganization']);
        $this->merchantwebsite          = AU::get($data['merchantwebsite']);
        $this->transtype                = AU::get($data['transtype']);
    }

    public function clean()
    {
        $this->transid                  = intval($this->transid);
        $this->userid                   = intval($this->userid);
        $this->merchantid               = intval($this->merchantid);
        $this->transamount              = floatval($this->transamount);
        $this->commission               = floatval($this->commission);

        if (empty($this->voided)) {
            $this->voided               = false;
        } else {
            $this->voided               = boolval($this->voided);
        }

        if (empty($this->pendingdate)) {
            $this->pendingdate          = null;
        }

        if (empty($this->locked)) {
            $this->locked               = false;
        } else {
            $this->locked               = boolval($this->locked);
        }

        if (empty($this->affcomment)) {
            $this->affcomment           = null;
        }

        if (empty($this->bannerpage)) {
            $this->bannerpage           = null;
        }

        if (empty($this->reversaldate)) {
            $this->reversaldate         = null;
        }

        if (empty($this->clickdate)) {
            $this->clickdate            = null;
        }

        if (empty($this->clicktime)) {
            $this->clicktime            = null;
        }

        $this->bannerid                 = intval($this->bannerid);

        if (empty($this->skulist)) {
            $this->skulist              = null;
        }

        if (empty($this->quantitylist)) {
            $this->quantitylist         = 0;
        } else {
            $this->quantitylist         = intval($this->quantitylist);
        }

        if (empty($this->lockdate)) {
            $this->lockdate             = null;
        }

        if (empty($this->paiddate)) {
            $this->paiddate             = null;
        }
    }

    /**
     * @return int
     */
    public function getTransid()
    {
        return $this->transid;
    }

    /**
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
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
    public function getTransdate()
    {
        return $this->transdate;
    }

    /**
     * @return float
     */
    public function getTransamount()
    {
        return $this->transamount;
    }

    /**
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return bool
     */
    public function isVoided()
    {
        return $this->voided;
    }

    /**
     * @return null|string
     */
    public function getPendingdate()
    {
        return $this->pendingdate;
    }

    /**
     * @return bool
     */
    public function isLocked()
    {
        return $this->locked;
    }

    /**
     * @return null|string
     */
    public function getAffcomment()
    {
        return $this->affcomment;
    }

    /**
     * @return null|string
     */
    public function getBannerpage()
    {
        return $this->bannerpage;
    }

    /**
     * @return null|string
     */
    public function getReversaldate()
    {
        return $this->reversaldate;
    }

    /**
     * @return null|string
     */
    public function getClickdate()
    {
        return $this->clickdate;
    }

    /**
     * @return null|string
     */
    public function getClicktime()
    {
        return $this->clicktime;
    }

    /**
     * @return int
     */
    public function getBannerid()
    {
        return $this->bannerid;
    }

    /**
     * @return null|string
     */
    public function getSkulist()
    {
        return $this->skulist;
    }

    /**
     * @return int|null
     */
    public function getQuantitylist()
    {
        return $this->quantitylist;
    }

    /**
     * @return null|string
     */
    public function getLockdate()
    {
        return $this->lockdate;
    }

    /**
     * @return null|string
     */
    public function getPaiddate()
    {
        return $this->paiddate;
    }

    /**
     * @return string
     */
    public function getMerchantorganization()
    {
        return $this->merchantorganization;
    }

    /**
     * @return string
     */
    public function getMerchantwebsite()
    {
        return $this->merchantwebsite;
    }

    /**
     * @return string
     */
    public function getTranstype()
    {
        return $this->transtype;
    }
}
