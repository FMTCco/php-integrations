<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class BaseGetResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var string
     */
    protected $timestamp;

    /**
     * @var string
     */
    protected $apikey;

    /**
     * @var int
     */
    protected $result;

    /**
     * @var string
     */
    protected $authtoken;

    /**
     * Mapped from @attributes
     * @var array
     */
    protected $attributes;

    /**
     * @var Pagination
     */
    protected $pagination;


    public function __construct($data = [])
    {
        $this->timestamp                = AU::get($data['timestamp']);
        $this->apikey                   = AU::get($data['apikey']);
        $this->result                   = AU::get($data['result']);
        $this->authtoken                = AU::get($data['authtoken']);
        $this->attributes               = AU::get($data['@attributes'], []);

        $this->pagination               = AU::get($data['pagination'], []);
        $this->pagination               = new Pagination($this->pagination);
    }


    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return string
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return string
     */
    public function getAuthtoken()
    {
        return $this->authtoken;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }

}