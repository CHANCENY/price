<?php

declare(strict_types=1);

namespace Simp\Price\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Simp\Price\Exception\CurrencyNotFoundException;
use Simp\Price\Exception\DivisionByZeroException;
use Simp\Price\Exception\FailedExchangeRateDownloadException;
use Simp\Price\Exception\QuoteCurrencyForExchangeNotSupportedException;

final class ExceptionTest extends TestCase
{
    public function testCurrencyNotFoundExceptionMessageAndCode(): void
    {
        $exception = new CurrencyNotFoundException('XYZ');

        self::assertSame('This currency [XYZ] code is not supported', $exception->getMessage());
        self::assertSame(1007, $exception->getCode());
    }

    public function testFailedExchangeRateDownloadExceptionMessageAndCode(): void
    {
        $exception = new FailedExchangeRateDownloadException('https://rates.example');

        self::assertSame(
            'Downloading currency exchange rates failed after trying 3 times from [https://rates.example]',
            $exception->getMessage()
        );
        self::assertSame(1008, $exception->getCode());
    }

    public function testQuoteCurrencyExceptionMessageAndCode(): void
    {
        $exception = new QuoteCurrencyForExchangeNotSupportedException('XYZ');

        self::assertSame('This quote currency not supported [XYZ]', $exception->getMessage());
        self::assertSame(1009, $exception->getCode());
    }

    public function testDivisionByZeroExceptionMessageAndCode(): void
    {
        $exception = new DivisionByZeroException('4 / 0');

        self::assertSame('Division involving zero not allowed [4 / 0]', $exception->getMessage());
        self::assertSame(1010, $exception->getCode());
    }
}
