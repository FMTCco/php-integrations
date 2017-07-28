<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Status implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var int
     */
    protected $code;

    /**
     * @var string
     */
    protected $message;


    public function __construct($data = [])
    {
        $this->code                     = AU::getUnset($data, 'code');
        $this->message                  = AU::getUnset($data, 'message');

        $this->setUnmappedVariablesFromResponse($data);
    }

    public function clean()
    {
        $this->code                     = intval($this->code);
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
