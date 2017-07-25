<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class GetVoidTrailResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var VoidTrail[]
     */
    protected $data;


    public function __construct($data = [])
    {
        $this->data                     = AU::get($data['reversalreportrecord'], []);
    }

    public function clean()
    {
        if (!AU::isArrays($this->data)) {
            $this->data                 = [$this->data];
        }

        for ($i = 0; $i < sizeof($this->data); $i++) {
            $this->data[$i]             = new VoidTrail($this->data[$i]);
            $this->data[$i]->clean();
        }
    }

    /**
     * @return VoidTrail[]
     */
    public function getData()
    {
        return $this->data;
    }
}
