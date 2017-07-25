<?php

namespace FMTCco\Integrations\Apis\Skimlinks\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class GetCommissionsResponse extends BaseGetResponse implements \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var Commission[]
     */
    protected $commissions;


    public function __construct($data = [])
    {
        parent::__construct($data);

        $commissions                        = AU::get($data['commissions'], []);
        $commission_keys                    = array_keys($commissions);
        foreach ($commission_keys AS $key)
        {
            $this->commissions[]            = new Commission($commissions[$key]);
        }
    }

    /**
     * @return Commission[]
     */
    public function getCommissions ()
    {
        return $this->commissions;
    }
}