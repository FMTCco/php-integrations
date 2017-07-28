<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Activity implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


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
        $this->transid                  = AU::getUnset($data, 'transid');
        $this->userid                   = AU::getUnset($data, 'userid');
        $this->merchantid               = AU::getUnset($data, 'merchantid');
        $this->transdate                = AU::getUnset($data, 'transdate');
        $this->transamount              = AU::getUnset($data, 'transamount');
        $this->commission               = AU::getUnset($data, 'commission');
        $this->comment                  = AU::getUnset($data, 'comment');
        $this->voided                   = AU::getUnset($data, 'voided');
        $this->pendingdate              = AU::getUnset($data, 'pendingdate');
        $this->locked                   = AU::getUnset($data, 'locked');
        $this->affcomment               = AU::getUnset($data, 'affcomment');
        $this->bannerpage               = AU::getUnset($data, 'bannerpage');
        $this->reversaldate             = AU::getUnset($data, 'reversaldate');
        $this->clickdate                = AU::getUnset($data, 'clickdate');
        $this->clicktime                = AU::getUnset($data, 'clicktime');
        $this->bannerid                 = AU::getUnset($data, 'bannerid');
        $this->skulist                  = AU::getUnset($data, 'skulist');
        $this->quantitylist             = AU::getUnset($data, 'quantitylist');
        $this->lockdate                 = AU::getUnset($data, 'lockdate');
        $this->paiddate                 = AU::getUnset($data, 'paiddate');
        $this->merchantorganization     = AU::getUnset($data, 'merchantorganization');
        $this->merchantwebsite          = AU::getUnset($data, 'merchantwebsite');
        $this->transtype                = AU::getUnset($data, 'transtype');

        $this->setUnmappedVariablesFromResponse($data);
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
