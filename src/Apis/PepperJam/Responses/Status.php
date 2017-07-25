<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Status implements \JsonSerializable
{

    use SimpleSerializable;


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
        $this->code                     = AU::get($data['code']);
        $this->message                  = AU::get($data['message']);
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
