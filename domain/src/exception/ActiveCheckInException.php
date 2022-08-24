<?php

namespace timeMonitor\domain\exception;

use Exception;
use RuntimeException;

class ActiveCheckInException extends RuntimeException
{

    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
