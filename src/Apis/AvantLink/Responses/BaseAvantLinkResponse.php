<?php

namespace FMTCco\Integrations\Apis\AvantLink\Responses;


abstract class BaseAvantLinkResponse
{

    /**
     * @param   string  $value
     * @return  float
     */
    protected function cleanFloat($value)
    {
        if (str_contains($value, ["(", ")"])) {
            echo 'dying in BaseAvantLinkResponse';
            dd($value);
        }
        $value                          = str_replace(['$', '%', '(', ')'], '', $value);
        return floatval($value);
    }

    /**
     * @param   string  $value
     * @return  bool
     */
    protected function cleanBoolean($value)
    {
        if (strtolower($value) == 'no') {
            return false;
        } else if (strtolower($value) == 'yes') {
            return true;
        } else {
            return $value;
        }
    }
}
