<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class VoidTrail implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int
     */
    protected $transid;

    /**
     * @var string
     */
    protected $voiddate;

    /**
     * @var string
     */
    protected $voidreason;

    /**
     * @var float
     */
    protected $transamount;

    /**
     * @var float
     */
    protected $commission;

    /**
     * @var string|null
     */
    protected $affcomment;


    public function __construct($data = [])
    {
        $this->transid                  = AU::get($data['transid']);
        $this->voiddate                 = AU::get($data['voiddate']);
        $this->voidreason               = AU::get($data['voidreason']);
        $this->transamount              = AU::get($data['transamount']);
        $this->commission               = AU::get($data['commission']);
        $this->affcomment               = AU::get($data['affcomment']);
    }

    public function clean()
    {
        $this->transid                  = intval($this->transid);
        $this->transamount              = floatval($this->transamount);
        $this->commission               = floatval($this->commission);

        if (empty($this->affcomment)) {
            $this->affcomment           = null;
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
     * @return string
     */
    public function getVoiddate()
    {
        return $this->voiddate;
    }

    /**
     * @return string
     */
    public function getVoidreason()
    {
        return $this->voidreason;
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
     * @return null|string
     */
    public function getAffcomment()
    {
        return $this->affcomment;
    }
}
