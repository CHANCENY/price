<?php

namespace Simp\Price\Exception;

use Throwable;

class QuoteCurrencyForExchangeNotSupportedException extends \Exception
{
   
    public function __construct(string $message = "", int $code = 0, Throwable|null $previous = null)
    {
        parent::__construct("This quote currency not supported [$message]", 1009, $previous);
    }
}