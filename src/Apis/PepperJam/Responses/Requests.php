<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Requests implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


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
        $this->current                  = AU::getUnset($data, 'current');
        $this->maximum                  = AU::getUnset($data, 'maximum');

        $this->setUnmappedVariablesFromResponse($data);
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
