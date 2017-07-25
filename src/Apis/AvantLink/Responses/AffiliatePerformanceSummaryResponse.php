<?php

namespace FMTCco\Integrations\Apis\AvantLink\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class AffiliatePerformanceSummaryResponse extends BaseAvantLinkResponse implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var AffiliatePerformanceSummary[]
     */
    protected $items;


    public function __construct($data = [])
    {
        $this->items                    = AU::get($data['Table1'], []);
    }

    public function clean()
    {
        if (!AU::isArrays($this->items)) {
            $this->items                = [$this->items];
        }

        for ($i = 0; $i < sizeof($this->items); $i++) {
            $this->items[$i]            = new AffiliatePerformanceSummary($this->items[$i]);
            $this->items[$i]->clean();
        }
    }

    /**
     * @return AffiliatePerformanceSummary[]
     */
    public function getItems()
    {
        return $this->items;
    }
}
