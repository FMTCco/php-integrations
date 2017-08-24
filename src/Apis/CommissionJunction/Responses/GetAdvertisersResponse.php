<?php

namespace FMTCco\Integrations\Apis\CommissionJunction\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class GetAdvertisersResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int
     */
    protected $total_matched;

    /**
     * @var int
     */
    protected $records_returned;

    /**
     * @var int
     */
    protected $page_number;

    /**
     * @var Advertiser[]
     */
    protected $advertisers;


    public function __construct($data = [])
    {
        $this->total_matched            = AU::get($data['advertisers']['@attributes']['total-matched']);
        $this->records_returned         = AU::get($data['advertisers']['@attributes']['records-returned']);
        $this->page_number              = AU::get($data['advertisers']['@attributes']['page-number']);
        $this->advertisers              = AU::get($data['advertisers']['advertiser'], []);
    }

    public function clean()
    {
        $this->total_matched            = intval($this->total_matched);

        if ($this->total_matched == 1) {
            $this->advertisers          = [$this->advertisers];
        }

        for ($i = 0; $i < sizeof($this->advertisers); $i++) {
            $this->advertisers[$i]      = new Advertiser($this->advertisers[$i]);
        }
    }

    /**
     * @return int
     */
    public function getTotalMatched()
    {
        return $this->total_matched;
    }

    /**
     * @return int
     */
    public function getRecordsReturned()
    {
        return $this->records_returned;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     * @return Advertiser[]
     */
    public function getAdvertisers()
    {
        return $this->advertisers;
    }

}