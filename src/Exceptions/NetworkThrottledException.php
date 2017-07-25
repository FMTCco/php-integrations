<?php

namespace FMTCco\Integrations\Exceptions;

class NetworkThrottledException extends \Exception
{

    public function __construct($message, $code = 429, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
