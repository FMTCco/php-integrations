<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class Pagination implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var int
     */
    protected $total_results;

    /**
     * @var int
     */
    protected $total_pages;


    public function __construct($data = [])
    {
        $this->total_results            = AU::get($data['total_results']);
        $this->total_pages              = AU::get($data['total_pages']);
    }

    public function clean()
    {
        $this->total_results            = intval($this->total_results);
        $this->total_pages              = intval($this->total_pages);
    }

    /**
     * @return int
     */
    public function getTotalResults()
    {
        return $this->total_results;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->total_pages;
    }
}
