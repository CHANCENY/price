<?php

declare(strict_types=1);

namespace Simp\Price\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Simp\Price\lib\Formatter;

final class FormatterTest extends TestCase
{
    public function testFormatsCurrencyWithCommaThousandsAndDotDecimals(): void
    {
        self::assertSame('1,234.50', (new Formatter('USD'))->format(1234.5));
    }

    public function testFormatsCurrencyWithDotThousandsAndCommaDecimals(): void
    {
        self::assertSame('1.234,50', (new Formatter('ARS'))->format('1234.5'));
    }

    public function testFormatsCurrencyWithThreeDecimalPlaces(): void
    {
        self::assertSame('1,234.567', (new Formatter('BHD'))->format(1234.5674));
    }

    public function testFormatsCurrencyWithSpaceThousandsSeparator(): void
    {
        self::assertSame('1 234.50', (new Formatter('AUD'))->format(1234.5));
    }
}
