<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class InvalidLink implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;

    /**
     * @var int
     */
    protected $creative_id;


    /**
     * @var string
     */
    protected $creative_type;


    /**
     * @var int
     */
    protected $program_id;


    /**
     * @var string
     */
    protected $reason;


    /**
     * @var int
     */
    protected $website_id;


    /**
     * @var string
     */
    protected $created;


    /**
     * @var string
     */
    protected $program_name;


    public function __construct($data = [])
    {
        $this->creative_id                  = AU::getUnset($data, 'creative_id');
        $this->creative_type                = AU::getUnset($data, 'creative_type');
        $this->program_id                   = AU::getUnset($data, 'program_id');
        $this->reason                       = AU::getUnset($data, 'reason');
        $this->website_id                   = AU::getUnset($data, 'website_id');
        $this->created                      = AU::getUnset($data, 'created');
        $this->program_name                 = AU::getUnset($data, 'program_name');
    }

    /**
     * @return int
     */
    public function getCreativeId()
    {
        return $this->creative_id;
    }

    /**
     * @return string
     */
    public function getCreativeType()
    {
        return $this->creative_type;
    }

    /**
     * @return int
     */
    public function getProgramId()
    {
        return $this->program_id;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return int
     */
    public function getWebsiteId()
    {
        return $this->website_id;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return string
     */
    public function getProgramName()
    {
        return $this->program_name;
    }

}