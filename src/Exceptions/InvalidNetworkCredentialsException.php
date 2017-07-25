<?php

namespace FMTCco\Integrations\Exceptions;

class InvalidNetworkCredentialsException extends \Exception
{

    public function __construct($message, $code = 401, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
