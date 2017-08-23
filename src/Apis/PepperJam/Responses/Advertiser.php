<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Advertiser implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $logo;

    /**
     * @var string[]
     */
    protected $prohibited_states;

    /**
     * @var Category[]
     */
    protected $category;

    /**
     * @var string
     */
    protected $address1;

    /**
     * @var string|null
     */
    protected $address2;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $state_code;

    /**
     * @var string
     */
    protected $zip_code;

    /**
     * @var string
     */
    protected $county_code;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var string
     */
    protected $contact_name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $join_date;

    /**
     * @var int
     */
    protected $cookie_duration;

    /**
     * @var float
     */
    protected $percentage_payout;

    /**
     * @var string
     */
    protected $flat_payout;

    /**
     * @var string
     */
    protected $deep_linking;

    /**
     * @var string
     */
    protected $product_feed;


    public function __construct($data = [])
    {
        $this->id                           = AU::getUnset($data, 'id');
        $this->name                         = AU::getUnset($data, 'name');
        $this->description                  = AU::getUnset($data, 'description');
        $this->logo                         = AU::getUnset($data, 'logo');
        $this->prohibited_states            = AU::getUnset($data, 'prohibited_states');

        $this->category                     = [];
        foreach (AU::get($data['category'], []) AS $item)
        {
            $this->category[]               = new Category($item);
        }

        $this->address1                     = AU::getUnset($data, 'address1');
        $this->address2                     = AU::getUnset($data, 'address2');
        $this->city                         = AU::getUnset($data, 'city');
        $this->state_code                   = AU::getUnset($data, 'state_code');
        $this->zip_code                     = AU::getUnset($data, 'zip_code');
        $this->county_code                  = AU::getUnset($data, 'county_code');
        $this->phone                        = AU::getUnset($data, 'phone');
        $this->website                      = AU::getUnset($data, 'website');
        $this->contact_name                 = AU::getUnset($data, 'contact_name');
        $this->email                        = AU::getUnset($data, 'email');
        $this->currency                     = AU::getUnset($data, 'currency');
        $this->status                       = AU::getUnset($data, 'status');
        $this->join_date                    = AU::getUnset($data, 'join_date');
        $this->cookie_duration              = AU::getUnset($data, 'cookie_duration');
        $this->percentage_payout            = AU::getUnset($data, 'percentage_payout');
        $this->flat_payout                  = AU::getUnset($data, 'flat_payout');
        $this->deep_linking                 = AU::getUnset($data, 'deep_linking');
        $this->product_feed                 = AU::getUnset($data, 'product_feed');
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @return string[]
     */
    public function getProhibitedStates()
    {
        return $this->prohibited_states;
    }

    /**
     * @return Category[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @return null|string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getStateCode()
    {
        return $this->state_code;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @return string
     */
    public function getCountyCode()
    {
        return $this->county_code;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->contact_name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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
     * @return string
     */
    public function getJoinDate()
    {
        return $this->join_date;
    }

    /**
     * @return int
     */
    public function getCookieDuration()
    {
        return $this->cookie_duration;
    }

    /**
     * @return float
     */
    public function getPercentagePayout()
    {
        return $this->percentage_payout;
    }

    /**
     * @return string
     */
    public function getFlatPayout()
    {
        return $this->flat_payout;
    }

    /**
     * @return string
     */
    public function getDeepLinking()
    {
        return $this->deep_linking;
    }

    /**
     * @return string
     */
    public function getProductFeed()
    {
        return $this->product_feed;
    }

}