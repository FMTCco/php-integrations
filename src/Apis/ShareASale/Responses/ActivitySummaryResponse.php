<?php

namespace FMTCco\Integrations\Apis\ShareASale\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class ActivitySummaryResponse implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var ActivitySummary[]
     */
    protected $data;


    public function __construct($data = [])
    {
        $this->data                     = AU::get($data['activitysummaryreportrecord'], []);
    }

    public function clean()
    {
        if (!AU::isArrays($this->data)) {
            $this->data                 = [$this->data];
        }

        for ($i = 0; $i < sizeof($this->data); $i++) {
            $this->data[$i]             = new ActivitySummary($this->data[$i]);
            $this->data[$i]->clean();
        }
    }

    /**
     * @return ActivitySummary[]
     */
    public function getData()
    {
        return $this->data;
    }
}
