<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class CustomParameter implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $value;


    public function __construct($data = [])
    {
        $this->key                      = AU::getUnset($data, 'key');
        $this->value                    = AU::getUnset($data, 'value');
        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}