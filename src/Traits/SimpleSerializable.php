<?php

namespace FMTCco\Integrations\Traits;

trait SimpleSerializable
{

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->simpleSerialize();
    }

    /**
     * @return array
     */
    private function simpleSerialize()
    {
        $data               = get_object_vars($this);
        $key_set            = array_keys($data);

        foreach ($key_set AS $key)
        {
            //  Mappings aren't working for these for some reason...
            if (preg_match("/unmappedvariables/", strtolower($key)))
                unset($data[$key]);
        }

        return $data;
    }
}
