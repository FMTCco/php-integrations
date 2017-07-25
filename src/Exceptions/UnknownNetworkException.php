<?php

namespace FMTCco\Integrations\Exceptions;

class UnknownNetworkException extends \Exception
{

    public function __construct($message, $code = 500, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
