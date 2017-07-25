<?php

namespace FMTCco\Integrations\Exceptions;


class InsufficientNetworkPermissionsException extends \Exception
{

    public function __construct($message = 'Insufficient permissions', $code = 403, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
