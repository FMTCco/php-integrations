<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class TransactionPart implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;

    /**
     * @var int
     */
    protected $commissionGroupId;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var float
     */
    protected $commissionAmount;

    /**
     * @var string
     */
    protected $commissionGroupCode;

    /**
     * @var string
     */
    protected $commissionGroupName;


    public function __construct($data = [])
    {
        $this->commissionGroupId        = AU::getUnset($data, 'commissionGroupId');
        $this->amount                   = AU::getUnset($data, 'amount');
        $this->commissionAmount         = AU::getUnset($data, 'commissionAmount');
        $this->commissionGroupCode      = AU::getUnset($data, 'commissionGroupCode');
        $this->commissionGroupName      = AU::getUnset($data, 'commissionGroupName');

        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return int
     */
    public function getCommissionGroupId()
    {
        return $this->commissionGroupId;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getCommissionAmount()
    {
        return $this->commissionAmount;
    }

    /**
     * @return string
     */
    public function getCommissionGroupCode()
    {
        return $this->commissionGroupCode;
    }

    /**
     * @return string
     */
    public function getCommissionGroupName()
    {
        return $this->commissionGroupName;
    }

}