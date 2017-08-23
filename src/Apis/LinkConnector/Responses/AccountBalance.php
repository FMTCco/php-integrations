<?php

namespace FMTCco\Integrations\Apis\LinkConnector\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class AccountBalance implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var int
     */
    protected $AffiliateID;

    /**
     * @var float
     */
    protected $Balance;

    /**
     * @var string
     */
    protected $Updated;


    public function __construct($data = [])
    {
        $this->AffiliateID              = AU::getUnset($data, 'AffiliateID');
        $this->Balance                  = AU::getUnset($data, 'Balance');
        $this->Updated                  = AU::getUnset($data, 'Updated');

        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return int
     */
    public function getAffiliateID()
    {
        return $this->AffiliateID;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @return string
     */
    public function getUpdated()
    {
        return $this->Updated;
    }

}