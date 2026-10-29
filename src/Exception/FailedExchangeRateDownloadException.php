<?php

declare(strict_types=1);

namespace Simp\Price\Exception;

use Throwable;

class FailedExchangeRateDownloadException extends \Exception
{
   
    public function __construct(string $message = "", int $code = 0, Throwable|null $previous = null)
    {
        parent::__construct("Downloading currency exchange rates failed after trying 3 times from [$message]", 1008, $previous);
    }
}
