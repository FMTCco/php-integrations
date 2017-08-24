<?php

namespace FMTCco\Integrations\Apis\ImpactRadius\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetCampaigns implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int|null
     */
    protected $Page;

    /**
     * @var int|null
     */
    protected $PageSize;

    /**
     * @return int|null
     */
    public function getPage()
    {
        return $this->Page;
    }

    /**
     * @param int|null $Page
     */
    public function setPage($Page)
    {
        $this->Page = $Page;
    }

    /**
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     * @param int|null $PageSize
     */
    public function setPageSize($PageSize)
    {
        $this->PageSize = $PageSize;
    }

}