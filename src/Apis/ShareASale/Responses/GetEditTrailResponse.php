<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class GetEditTrailResponse implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var EditTrail[]
     */
    protected $data;


    public function __construct($data = [])
    {
        $this->data                     = AU::get($data['edittrailreportrecord'], []);
    }

    public function clean()
    {
        if (!AU::isArrays($this->data)) {
            $this->data                 = [$this->data];
        }

        for ($i = 0; $i < sizeof($this->data); $i++) {
            $this->data[$i]             = new EditTrail($this->data[$i]);
            $this->data[$i]->clean();
        }
    }

    /**
     * @return EditTrail[]
     */
    public function getData()
    {
        return $this->data;
    }
}
