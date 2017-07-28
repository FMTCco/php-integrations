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
        if (isset($data['unmappedVariables']))
            unset($data['unmappedVariables']);
        return $data;
    }
}
