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
        return get_object_vars($this);
    }
}
