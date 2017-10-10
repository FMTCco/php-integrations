<?php
/**
 * Created by IntelliJ IDEA.
 * User: jamesweston
 * Date: 10/9/17
 * Time: 10:02 PM
 */

namespace FMTCco\Integrations\Apis\AffiliateWindow\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Amount implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;


    public function __construct($data = [])
    {
        $this->amount                   = AU::getUnset($data, 'amount');
        $this->currency                 = AU::getUnset($data, 'currency');
        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

}