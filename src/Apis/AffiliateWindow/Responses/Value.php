<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Value implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var float
     */
    protected $dAmount;

    /**
     * @var string
     */
    protected $sCurrency;


    public function __construct($data = [])
    {
        $this->dAmount                  = AU::getUnset($data, 'dAmount');
        $this->sCurrency                = AU::getUnset($data, 'sCurrency');

        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return float
     */
    public function getDAmount()
    {
        return $this->dAmount;
    }

    /**
     * @return string
     */
    public function getSCurrency()
    {
        return $this->sCurrency;
    }

}