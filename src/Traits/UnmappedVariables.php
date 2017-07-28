<?php

namespace FMTCco\Integrations\Traits;


trait UnmappedVariables
{

    /**
     * @var array|null
     */
    private $unmappedVariables;

    /**
     * @return array|null
     */
    public function getUnmappedVariables()
    {
        return $this->unmappedVariables;
    }

    /**
     * @param   array   $data
     */
    protected function setUnmappedVariablesFromResponse ($data)
    {
        if (!is_array($data))
            return;
        else if (empty($data))
            return;
        else
            $this->unmappedVariables    = array_keys($data);
    }

}