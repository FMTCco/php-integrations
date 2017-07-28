<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class CommissionHistory implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


    /**
     * The unique ID associated with the event. These IDs increase linearly with increasing timestamp.
     * @var int
     */
    protected $eventID;

    /**
     * The time at which the event occurred.
     * 2017-02-19T06:09:14+00:00
     * @var string
     */
    protected $eventTime;

    /**
     * This can be one of import, update or cancel
     * @var string
     */
    protected $event;

    /**
     * A unique ID Skimlinks associates with each commission.
     * @var int
     */
    protected $commissionID;

    /**
     * The date on which the transaction associated with the commission was recorded
     * (this is date in the reportcommissions API).
     * 2017-02-17
     * @var string
     */
    protected $transactionDate;

    /**
     * The ID of the publisher associated with the commission.
     * @var int
     */
    protected $publisherID;

    /**
     * The domain from which the click was recorded.
     * @var int
     */
    protected $domainID;

    /**
     * @var int
     */
    protected $merchantID;

    /**
     * @var float
     */
    protected $commissionValue;

    /**
     * @var float
     */
    protected $orderValue;

    /**
     * The currency in which the above two values are returned (we make an effort to return all commissions in the publisher's own currency,
     * but conversion data may not always be available).
     * @var string
     */
    protected $currency;

    /**
     * This will be 'active' if the commission is still valid, otherwise 'cancelled'.
     * @var string
     */
    protected $status;

    /**
     * The number of unique items associated with this commission.
     * @var int
     */
    protected $items;

    /**
     * Can be "unknown", "lead", "sale", "cpc" or "performance" if the commission is a performance incentive commission.
     * @var string
     */
    protected $commissionType;

    /**
     * @var array
     */
    protected $products;

    /**
     * The date and time when the click that resulted in the commission occurred
     * (only available for some networks).
     * @var string
     */
    protected $clickTime;

    /**
     * The user agent through which the click was recorded (only available for some networks).
     * @var string|null
     */
    protected $remoteUserAgent;

    /**
     * The page on which the click was recorded
     * (only available for some networks).
     * @var string|null
     */
    protected $remoteReferer;

    /**
     * A custom ID that can be given by a publisher to each individual click
     * (only available for some networks).
     * @var string|null
     */
    protected $customID;

    /**
     * The merchant URL clicked that generated this commission
     * (only available for some networks)
     * @var string|null
     */
    protected $url;


    public function __construct($data = [])
    {
        $this->eventID                  = AU::getUnset($data, 'eventID');
        $this->eventTime                = AU::getUnset($data, 'eventTime');
        $this->event                    = AU::getUnset($data, 'event');
        $this->commissionID             = AU::getUnset($data, 'commissionID');
        $this->transactionDate          = AU::getUnset($data, 'transactionDate');
        $this->publisherID              = AU::getUnset($data, 'publisherID');
        $this->domainID                 = AU::getUnset($data, 'domainID');
        $this->merchantID               = AU::getUnset($data, 'merchantID');
        $this->commissionValue          = AU::getUnset($data, 'commissionValue');
        $this->orderValue               = AU::getUnset($data, 'orderValue');
        $this->currency                 = AU::getUnset($data, 'currency');
        $this->status                   = AU::getUnset($data, 'status');
        $this->items                    = AU::getUnset($data, 'items');
        $this->commissionType           = AU::getUnset($data, 'commissionType');
        $this->clickTime                = AU::getUnset($data, 'clickTime');
        $this->remoteUserAgent          = AU::getUnset($data, 'remoteUserAgent');
        $this->remoteReferer            = AU::getUnset($data, 'remoteReferer');
        $this->customID                 = AU::getUnset($data, 'customID');
        $this->url                      = AU::getUnset($data, 'url');

        $this->products                 = [];
        $key_set                        = array_keys($data);
        foreach ($key_set AS $key)
        {
            if (preg_match("/product/", $key))
            {
                $this->products         = $data[$key];
                unset($data[$key]);
            }
        }

        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return int
     */
    public function getEventID()
    {
        return $this->eventID;
    }

    /**
     * @return string
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return int
     */
    public function getCommissionID()
    {
        return $this->commissionID;
    }

    /**
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * @return int
     */
    public function getPublisherID()
    {
        return $this->publisherID;
    }

    /**
     * @return int
     */
    public function getDomainID()
    {
        return $this->domainID;
    }

    /**
     * @return int
     */
    public function getMerchantID()
    {
        return $this->merchantID;
    }

    /**
     * @return float
     */
    public function getCommissionValue()
    {
        return $this->commissionValue;
    }

    /**
     * @return float
     */
    public function getOrderValue()
    {
        return $this->orderValue;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return string
     */
    public function getCommissionType()
    {
        return $this->commissionType;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return string
     */
    public function getClickTime()
    {
        return $this->clickTime;
    }

    /**
     * @return null|string
     */
    public function getRemoteUserAgent()
    {
        return $this->remoteUserAgent;
    }

    /**
     * @return null|string
     */
    public function getRemoteReferer()
    {
        return $this->remoteReferer;
    }

    /**
     * @return null|string
     */
    public function getCustomID()
    {
        return $this->customID;
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        return $this->url;
    }

}