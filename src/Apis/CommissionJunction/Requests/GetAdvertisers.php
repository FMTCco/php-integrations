<?php

namespace FMTCco\Integrations\Apis\CommissionJunction\Requests;


class GetAdvertisers implements \JsonSerializable
{

    /**
     * @var string|null
     */
    protected $advertiser_ids;

    /**
     * @var string|null
     */
    protected $records_per_page;

    /**
     * @var string|null
     */
    protected $page_number;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['advertiser-ids']           = $this->advertiser_ids;
        $object['records-per-page']         = $this->records_per_page;
        $object['page-number']              = $this->page_number;

        return $object;
    }

    /**
     * @return null|string
     */
    public function getAdvertiserIds()
    {
        return $this->advertiser_ids;
    }

    /**
     * @param null|string $advertiser_ids
     */
    public function setAdvertiserIds($advertiser_ids)
    {
        $this->advertiser_ids = $advertiser_ids;
    }

    /**
     * @return null|string
     */
    public function getRecordsPerPage()
    {
        return $this->records_per_page;
    }

    /**
     * @param null|string $records_per_page
     */
    public function setRecordsPerPage($records_per_page)
    {
        $this->records_per_page = $records_per_page;
    }

    /**
     * @return null|string
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     * @param null|string $page_number
     */
    public function setPageNumber($page_number)
    {
        $this->page_number = $page_number;
    }

}