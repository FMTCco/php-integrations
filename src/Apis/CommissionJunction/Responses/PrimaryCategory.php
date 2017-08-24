<?php

namespace FMTCco\Integrations\Apis\CommissionJunction\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class PrimaryCategory implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var string
     */
    protected $parent;

    /**
     * @var string
     */
    protected $child;


    public function __construct($data = [])
    {
        $this->parent                   = AU::get($data['parent']);
        $this->child                    = AU::get($data['child']);
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return string
     */
    public function getChild()
    {
        return $this->child;
    }

}