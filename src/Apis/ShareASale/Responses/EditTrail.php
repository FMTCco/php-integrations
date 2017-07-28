<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class EditTrail implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var int
     */
    protected $transid;

    /**
     * @var string
     */
    protected $editdate;

    /**
     * @var float
     */
    protected $originaltransamount;

    /**
     * @var float
     */
    protected $originalcommission;

    /**
     * @var float
     */
    protected $newtransamount;

    /**
     * @var float
     */
    protected $newcommission;

    /**
     * @var string|null
     */
    protected $affcomment;


    public function __construct($data = [])
    {
        $this->transid                  = AU::getUnset($data, 'transid');
        $this->editdate                 = AU::getUnset($data, 'editdate');
        $this->originaltransamount      = AU::getUnset($data, 'originaltransamount');
        $this->originalcommission       = AU::getUnset($data, 'originalcommission');
        $this->newtransamount           = AU::getUnset($data, 'newtransamount');
        $this->newcommission            = AU::getUnset($data, 'newcommission');
        $this->affcomment               = AU::getUnset($data, 'affcomment');

        $this->setUnmappedVariablesFromResponse($data);
    }

    public function clean()
    {
        $this->transid                  = intval($this->transid);
        $this->originaltransamount      = floatval($this->originaltransamount);
        $this->originalcommission       = floatval($this->originalcommission);
        $this->newtransamount           = floatval($this->newtransamount);
        $this->newcommission            = floatval($this->newcommission);

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
    public function getEditdate()
    {
        return $this->editdate;
    }

    /**
     * @return float
     */
    public function getOriginaltransamount()
    {
        return $this->originaltransamount;
    }

    /**
     * @return float
     */
    public function getOriginalcommission()
    {
        return $this->originalcommission;
    }

    /**
     * @return float
     */
    public function getNewtransamount()
    {
        return $this->newtransamount;
    }

    /**
     * @return float
     */
    public function getNewcommission()
    {
        return $this->newcommission;
    }

    /**
     * @return null|string
     */
    public function getAffcomment()
    {
        return $this->affcomment;
    }
}
