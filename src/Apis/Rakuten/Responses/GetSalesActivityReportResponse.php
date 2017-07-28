<?php

namespace FMTCco\Integrations\Apis\Rakuten\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetSalesActivityReportResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var SalesActivityReport[]
     */
    protected $data;


    public function __construct($data = [])
    {
        $this->data                     = [];

        foreach ($data as $item) {
            $this->data[]               = new SalesActivityReport($item);
        }
    }

    /**
     * @return SalesActivityReport[]
     */
    public function getData()
    {
        return $this->data;
    }
}
