<?php

declare(strict_types=1);

namespace Simp\Price\Exception;

use Throwable;

class DivisionByZeroException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable|null $previous = null)
    {
        parent::__construct("Division involving zero not allowed [$message]", 1010, $previous);
    }
}
