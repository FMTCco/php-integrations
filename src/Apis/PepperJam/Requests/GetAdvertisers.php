<?php

namespace FMTCco\Integrations\Apis\PepperJam\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetAdvertisers implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var int|null
     */
    protected $page;

    /**
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int|null $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

}