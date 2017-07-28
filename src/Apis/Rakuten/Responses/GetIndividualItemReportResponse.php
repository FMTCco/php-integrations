<?php

namespace FMTCco\Integrations\Apis\Rakuten\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetIndividualItemReportResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var Transaction[]
     */
    protected $data;


    public function __construct($data = [])
    {
        $this->data                     = [];

        foreach ($data as $item) {
            $this->data[]               = new Transaction($item);
        }
    }

    /**
     * @return Transaction[]
     */
    public function getData()
    {
        return $this->data;
    }
}
