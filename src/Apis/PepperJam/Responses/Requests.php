<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Requests implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int
     */
    protected $current;

    /**
     * @var int
     */
    protected $maximum;


    public function __construct($data = [])
    {
        $this->current                  = AU::get($data['current']);
        $this->maximum                  = AU::get($data['maximum']);
    }

    public function clean()
    {
        $this->current                  = intval($this->current);
        $this->maximum                  = intval($this->maximum);
    }

    /**
     * @return int
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @return int
     */
    public function getMaximum()
    {
        return $this->maximum;
    }
}
