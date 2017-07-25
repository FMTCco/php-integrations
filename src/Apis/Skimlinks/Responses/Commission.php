<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Commission implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * A unique ID Skimlinks associates with each commission - use this to query commissions
     * @var int
     */
    protected $commissionID;

    /**
     * The date on which the transaction associated with the commission was recorded.
     * YYYY-MM-DD
     * @var string
     */
    protected $date;

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
     * The number of unique sales associated with this commission - legacy, as we group items and sales
     * @var int
     */
    protected $sales;

    /**
     * The date and time when the click that resulted in the commission occurred
     * (only available for some networks).
     * @var string
     */
    protected $clickTime;

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
        $this->commissionID             = AU::get($data['commissionID']);
        $this->date                     = AU::get($data['date']);
        $this->publisherID              = AU::get($data['publisherID']);
        $this->domainID                 = AU::get($data['domainID']);
        $this->merchantID               = AU::get($data['merchantID']);
        $this->commissionValue          = AU::get($data['commissionValue']);
        $this->orderValue               = AU::get($data['orderValue']);
        $this->currency                 = AU::get($data['currency']);
        $this->status                   = AU::get($data['status']);
        $this->items                    = AU::get($data['items']);
        $this->sales                    = AU::get($data['sales']);
        $this->clickTime                = AU::get($data['clickTime']);
        $this->commissionType           = AU::get($data['commissionType']);
        $this->remoteUserAgent          = AU::get($data['remoteUserAgent']);
        $this->remoteReferer            = AU::get($data['remoteReferer']);
        $this->customID                 = AU::get($data['customID']);
        $this->url                      = AU::get($data['url']);

        $this->products                 = [];
        $key_set                        = array_keys($data);
        foreach ($key_set AS $key)
        {
            if (preg_match("/product/", $key))
            {
                $this->products         = $data[$key];
            }
        }
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
    public function getDate()
    {
        return $this->date;
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
     * @return int
     */
    public function getSales()
    {
        return $this->sales;
    }

    /**
     * @return string
     */
    public function getClickTime()
    {
        return $this->clickTime;
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