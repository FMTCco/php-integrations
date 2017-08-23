<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class AdvertisersResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var Status
     */
    protected $status;

    /**
     * @var Pagination
     */
    protected $pagination;

    /**
     * @var Requests
     */
    protected $requests;

    /**
     * @var Advertiser[]
     */
    protected $data;


    public function __construct($data = [])
    {
        $this->status                   = new Status(AU::get($data['meta']['status'], []));
        $this->pagination               = new Pagination(AU::get($data['meta']['pagination'], []));
        $this->requests                 = new Requests(AU::get($data['meta']['requests'], []));
        $this->data                     = [];

        foreach (AU::get($data['data'], []) AS $item)
        {
            $this->data[]               = new Advertiser($item);
        }
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @return Requests
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * @return Advertiser[]
     */
    public function getData()
    {
        return $this->data;
    }
}