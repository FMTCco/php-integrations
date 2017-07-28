<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class TransactionDetail implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var int
     */
    protected $transaction_id;

    /**
     * @var string
     */
    protected $order_id;

    /**
     * @var string
     */
    protected $creative_type;

    /**
     * @var float
     */
    protected $commission;

    /**
     * @var float
     */
    protected $sale_amount;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var bool
     */
    protected $new_to_file;

    /**
     * @var string|null
     */
    protected $sub_type;

    /**
     * @var int|null
     */
    protected $sid;

    /**
     * @var string
     */
    protected $program_name;

    /**
     * @var int
     */
    protected $program_id;

    /**
     * @var string
     */
    protected $device_type;

    /**
     * @var string|null
     */
    protected $coupons;


    public function __construct($data = [])
    {
        $this->transaction_id           = AU::getUnset($data, 'transaction_id');
        $this->order_id                 = AU::getUnset($data, 'order_id');
        $this->creative_type            = AU::getUnset($data, 'creative_type');
        $this->commission               = AU::getUnset($data, 'commission');
        $this->sale_amount              = AU::getUnset($data, 'sale_amount');
        $this->type                     = AU::getUnset($data, 'type');
        $this->date                     = AU::getUnset($data, 'date');
        $this->status                   = AU::getUnset($data, 'status');
        $this->new_to_file              = AU::getUnset($data, 'new_to_file');
        $this->sub_type                 = AU::getUnset($data, 'sub_type');
        $this->sid                      = AU::getUnset($data, 'sid');
        $this->program_name             = AU::getUnset($data, 'program_name');
        $this->program_id               = AU::getUnset($data, 'program_id');
        $this->device_type              = AU::getUnset($data, 'device_type');
        $this->coupons                  = AU::getUnset($data, 'coupons');

        $this->setUnmappedVariablesFromResponse($data);
    }

    public function clean()
    {
        $this->transaction_id           = intval($this->transaction_id);
        $this->commission               = floatval($this->commission);
        $this->sale_amount              = floatval($this->sale_amount);

        if (strtolower($this->new_to_file) == 'no') {
            $this->new_to_file          = false;
        }
        if (strtolower($this->new_to_file) == 'yes') {
            $this->new_to_file          = true;
        }

        if (empty($this->sub_type)) {
            $this->sub_type             = null;
        }

        if (empty($this->sid)) {
            $this->sid                  = null;
        } else {
            $this->sid                  = intval($this->sid);
        }

        $this->program_id               = intval($this->program_id);

        if (empty($this->coupons)) {
            $this->coupons              = null;
        }
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @return string
     */
    public function getCreativeType()
    {
        return $this->creative_type;
    }

    /**
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @return float
     */
    public function getSaleAmount()
    {
        return $this->sale_amount;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function isNewToFile()
    {
        return $this->new_to_file;
    }

    /**
     * @return null|string
     */
    public function getSubType()
    {
        return $this->sub_type;
    }

    /**
     * @return int|null
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @return string
     */
    public function getProgramName()
    {
        return $this->program_name;
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
    public function getDeviceType()
    {
        return $this->device_type;
    }

    /**
     * @return null|string
     */
    public function getCoupons()
    {
        return $this->coupons;
    }
}
