<?php

namespace FMTCco\Integrations\Apis\CommissionJunction\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Action implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $commission;


    public function __construct($data = [])
    {
        $this->name                     = AU::get($data['name']);
        $this->type                     = AU::get($data['type']);
        $this->id                       = AU::get($data['id']);
        $this->commission               = AU::get($data['commission']['default']);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

}