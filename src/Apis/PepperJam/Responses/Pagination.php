<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Pagination implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


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
        $this->total_results            = AU::getUnset($data, 'total_results');
        $this->total_pages              = AU::getUnset($data, 'total_pages');

        $this->setUnmappedVariablesFromResponse($data);
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
