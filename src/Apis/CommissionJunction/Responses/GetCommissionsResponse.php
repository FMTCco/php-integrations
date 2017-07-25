<?php

namespace FMTCco\Integrations\Apis\CommissionJunction\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class GetCommissionsResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int
     */
    protected $total_matched;

    /**
     * @var Commission[]
     */
    protected $commissions;


    public function __construct($data = [])
    {
        $this->total_matched            = AU::get($data['commissions']['@attributes']['total-matched']);
        $this->commissions              = AU::get($data['commissions']['commission'], []);
    }

    public function clean()
    {
        $this->total_matched            = intval($this->total_matched);

        if ($this->total_matched == 1) {
            $this->commissions          = [$this->commissions];
        }

        for ($i = 0; $i < sizeof($this->commissions); $i++) {
            $this->commissions[$i]      = new Commission($this->commissions[$i]);
            $this->commissions[$i]->clean();
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
     * @return Commission[]
     */
    public function getCommissions()
    {
        return $this->commissions;
    }
}
