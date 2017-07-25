<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Pagination implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int
     */
    protected $total;

    /**
     * @var int
     */
    protected $from;

    /**
     * @var int
     */
    protected $itemCount;


    public function __construct($data = [])
    {
        $this->total                    = AU::get($data['total']);
        $this->from                     = AU::get($data['from']);
        $this->itemCount                = AU::get($data['itemCount']);
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

}