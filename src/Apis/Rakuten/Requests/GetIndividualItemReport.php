<?php

namespace FMTCco\Integrations\Apis\Rakuten\Requests;


use FMTCco\Integrations\Traits\SimpleSerializable;

class GetIndividualItemReport implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * Required if start_date and end_date are not provided
     * One of: last-year
     *
     * @var string|null
     */
    protected $date_range;

    /**
     * Required if date-range is not provided
     * e.g. 2017-01-01
     *
     * @var string|null
     */
    protected $start_date;

    /**
     * Required if date-range is not provided
     * e.g. 2017-01-01
     *
     * @var string|null
     */
    protected $end_date;

    /**
     * @var int|null
     */
    protected $network;

    /**
     * e.g. UTC, GMT
     *
     * @var string|null
     */
    protected $tz;

    /**
     * One of: transaction
     *
     * @var string|null
     */
    protected $date_type;

    /**
     * @param null|string $date_range
     */
    public function setDateRange($date_range)
    {
        $this->date_range = $date_range;
    }

    /**
     * @param null|string $start_date
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;
    }

    /**
     * @param null|string $end_date
     */
    public function setEndDate($end_date)
    {
        $this->end_date = $end_date;
    }

    /**
     * @param int|null $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }

    /**
     * @param null|string $tz
     */
    public function setTz($tz)
    {
        $this->tz = $tz;
    }

    /**
     * @param null|string $date_type
     */
    public function setDateType($date_type)
    {
        $this->date_type = $date_type;
    }
}
