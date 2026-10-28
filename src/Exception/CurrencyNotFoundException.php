<?php

namespace Simp\Price\Exception;

use Throwable;


class CurrencyNotFoundException extends \Exception
{  
    public function __construct(string $message = "", int $code = 0, Throwable|null $previous = null)
    {
        return parent::__construct("This currency [$message] code is not supported", 1007, $previous);
    }
}