<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Pagination implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;


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
        $this->total                    = AU::getUnset($data, 'total');
        $this->from                     = AU::getUnset($data, 'from');
        $this->itemCount                = AU::getUnset($data, 'itemCount');

        $this->setUnmappedVariablesFromResponse($data);
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