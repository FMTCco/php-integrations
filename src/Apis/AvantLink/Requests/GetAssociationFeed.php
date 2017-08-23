<?php

namespace FMTCco\Integrations\Apis\AvantLink\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetAssociationFeed implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * Known values: active
     * @var string|null
     */
    protected $association_status;

    /**
     * @return null|string
     */
    public function getAssociationStatus()
    {
        return $this->association_status;
    }

    /**
     * @param null|string $association_status
     */
    public function setAssociationStatus($association_status)
    {
        $this->association_status = $association_status;
    }

}