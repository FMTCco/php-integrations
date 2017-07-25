<?php

namespace FMTCco\Integrations\Apis\PepperJam\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class TransactionDetailResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var Status
     */
    protected $status;

    /**
     * @var Pagination
     */
    protected $pagination;

    /**
     * @var Requests
     */
    protected $requests;

    /**
     * @var TransactionDetail[]
     */
    protected $data;


    public function __construct($data = [])
    {
        $this->status                   = new Status(AU::get($data['meta']['status'], []));
        $this->pagination               = new Pagination(AU::get($data['meta']['pagination'], []));
        $this->requests                 = new Requests(AU::get($data['meta']['requests'], []));
        $this->data                     = AU::get($data['data'], []);
    }

    public function clean()
    {
        $this->status->clean();
        $this->pagination->clean();
        $this->requests->clean();

        for ($i = 0; $i < sizeof($this->data); $i++) {
            $this->data[$i]             = new TransactionDetail($this->data[$i]);
            $this->data[$i]->clean();
        }
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @return Requests
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * @return TransactionDetail[]
     */
    public function getData()
    {
        return $this->data;
    }
}
