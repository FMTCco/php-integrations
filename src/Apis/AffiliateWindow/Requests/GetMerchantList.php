<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetMerchantList implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var string|null
     */
    protected $sRelationship;

    /**
     * @return null|string
     */
    public function getSRelationship()
    {
        return $this->sRelationship;
    }

    /**
     * @param null|string $sRelationship
     */
    public function setSRelationship($sRelationship)
    {
        $this->sRelationship = $sRelationship;
    }

}