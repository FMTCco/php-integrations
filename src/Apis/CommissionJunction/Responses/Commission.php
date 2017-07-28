<?php

namespace FMTCco\Integrations\Apis\CommissionJunction\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Commission implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * @var string
     */
    protected $action_status;

    /**
     * @var string
     */
    protected $action_type;

    /**
     * @var string|null
     */
    protected $aid;

    /**
     * @var string
     */
    protected $commission_id;

    /**
     * @var string|null
     */
    protected $country;

    /**
     * @var string
     */
    protected $order_id;

    /**
     * @var string
     */
    protected $original;

    /**
     * @var string
     */
    protected $original_action_id;

    /**
     * @var string
     */
    protected $website_id;

    /**
     * @var string
     */
    protected $action_tracker_id;

    /**
     * @var string
     */
    protected $action_tracker_name;

    /**
     * @var string
     */
    protected $cid;

    /**
     * @var string
     */
    protected $advertiser_name;

    /**
     * @var string
     */
    protected $commission_amount;

    /**
     * @var string|null
     */
    protected $order_discount;

    /**
     * @var string|null
     */
    protected $sid;

    /**
     * @var string|null
     */
    protected $sale_amount;

    /**
     * @var string
     */
    protected $event_date;

    /**
     * @var string
     */
    protected $locking_date;

    /**
     * @var string
     */
    protected $posting_date;

    /**
     * @var string
     */
    protected $is_cross_device;


    /**
     * Commission constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->action_status            = AU::getUnset($data, 'action-status');
        $this->action_type              = AU::getUnset($data, 'action-type');
        $this->aid                      = AU::getUnset($data, 'aid');
        $this->commission_id            = AU::getUnset($data, 'commission-id');
        $this->country                  = AU::getUnset($data, 'country');
        $this->order_id                 = AU::getUnset($data, 'order-id');
        $this->original                 = AU::getUnset($data, 'original');
        $this->original_action_id       = AU::getUnset($data, 'original-action-id');
        $this->website_id               = AU::getUnset($data, 'website-id');
        $this->action_tracker_id        = AU::getUnset($data, 'action-tracker-id');
        $this->action_tracker_name      = AU::getUnset($data, 'action-tracker-name');
        $this->cid                      = AU::getUnset($data, 'cid');
        $this->advertiser_name          = AU::getUnset($data, 'advertiser-name');
        $this->commission_amount        = AU::getUnset($data, 'commission-amount');
        $this->order_discount           = AU::getUnset($data, 'order-discount');
        $this->sid                      = AU::getUnset($data, 'sid');
        $this->sale_amount              = AU::getUnset($data, 'sale-amount');
        $this->event_date               = AU::getUnset($data, 'event-date');
        $this->locking_date             = AU::getUnset($data, 'locking-date');
        $this->posting_date             = AU::getUnset($data, 'posting-date');
        $this->is_cross_device          = AU::getUnset($data, 'is-cross-device');

        $this->setUnmappedVariablesFromResponse($data);
    }

    public function clean()
    {
        if (empty($this->aid)) {
            $this->aid                  = null;
        }
        if (empty($this->country)) {
            $this->country              = null;
        }
        if (empty($this->website_id)) {
            $this->website_id           = null;
        }
        if (empty($this->order_discount)) {
            $this->order_discount       = null;
        }
        if (empty($this->sid)) {
            $this->sid                  = null;
        }
        if (empty($this->sale_amount)) {
            $this->sale_amount          = null;
        }
    }

    /**
     * @return string
     */
    public function getActionStatus()
    {
        return $this->action_status;
    }

    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->action_type;
    }

    /**
     * @return string|null
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @return string
     */
    public function getCommissionId()
    {
        return $this->commission_id;
    }

    /**
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
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
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * @return string
     */
    public function getOriginalActionId()
    {
        return $this->original_action_id;
    }

    /**
     * @return string
     */
    public function getWebsiteId()
    {
        return $this->website_id;
    }

    /**
     * @return string
     */
    public function getActionTrackerId()
    {
        return $this->action_tracker_id;
    }

    /**
     * @return string
     */
    public function getActionTrackerName()
    {
        return $this->action_tracker_name;
    }

    /**
     * @return string
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @return string
     */
    public function getAdvertiserName()
    {
        return $this->advertiser_name;
    }

    /**
     * @return string
     */
    public function getCommissionAmount()
    {
        return $this->commission_amount;
    }

    /**
     * @return string|null
     */
    public function getOrderDiscount()
    {
        return $this->order_discount;
    }

    /**
     * @return null|string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @return string|null
     */
    public function getSaleAmount()
    {
        return $this->sale_amount;
    }

    /**
     * @return string
     */
    public function getEventDate()
    {
        return $this->event_date;
    }

    /**
     * @return string
     */
    public function getLockingDate()
    {
        return $this->locking_date;
    }

    /**
     * @return string
     */
    public function getPostingDate()
    {
        return $this->posting_date;
    }

    /**
     * @return string
     */
    public function getIsCrossDevice()
    {
        return $this->is_cross_device;
    }

}
