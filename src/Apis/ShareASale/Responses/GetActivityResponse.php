<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class GetActivityResponse implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var Activity[]
     */
    protected $data;


    public function __construct($data = [])
    {
        $this->data                     = AU::get($data['activitydetailsreportrecord'], []);
    }

    public function clean()
    {
        if (!AU::isArrays($this->data)) {
            $this->data                 = [$this->data];
        }

        for ($i = 0; $i < sizeof($this->data); $i++) {
            $this->data[$i]             = new Activity($this->data[$i]);
            $this->data[$i]->clean();
        }
    }

    /**
     * @return Activity[]
     */
    public function getData()
    {
        return $this->data;
    }
}
