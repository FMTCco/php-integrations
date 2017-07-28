<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class VoidTrail implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


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
        $this->transid                  = AU::getUnset($data, 'transid');
        $this->voiddate                 = AU::getUnset($data, 'voiddate');
        $this->voidreason               = AU::getUnset($data, 'voidreason');
        $this->transamount              = AU::getUnset($data, 'transamount');
        $this->commission               = AU::getUnset($data, 'commission');
        $this->affcomment               = AU::getUnset($data, 'affcomment');

        $this->setUnmappedVariablesFromResponse($data);
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
