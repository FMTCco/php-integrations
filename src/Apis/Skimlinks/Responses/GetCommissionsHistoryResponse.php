<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class GetCommissionsHistoryResponse extends BaseGetResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var CommissionHistory[]
     */
    protected $commissionsHistory;


    public function __construct($data = [])
    {
        parent::__construct($data);

        $commissionsHistory                 = AU::get($data['commissions'], []);
        $commission_keys                    = array_keys($commissionsHistory);
        foreach ($commission_keys AS $key)
        {
            $this->commissionsHistory[]     = new CommissionHistory($commissionsHistory[$key]);
        }
    }

    /**
     * @return CommissionHistory[]
     */
    public function getCommissionsHistory ()
    {
        return $this->commissionsHistory;
    }

}