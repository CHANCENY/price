<?php

namespace Simp\Price\Tests\Unit;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use Simp\Price\Exception\QuoteCurrencyForExchangeNotSupportedException;
use Simp\Price\lib\Convertor;

final class ConvertorTest extends TestCase
{
    private array $originalRates;
    private Convertor $convertor;

    protected function setUp(): void
    {
        $this->originalRates = Convertor::$exchange_rates;
        Convertor::$exchange_rates = [
            'EUR' => ['date' => '2026-10-28', 'base' => 'USD', 'quote' => 'EUR', 'rate' => 0.9],
        ];

        $reflection = new ReflectionClass(Convertor::class);
        $this->convertor = $reflection->newInstanceWithoutConstructor();
    }

    protected function tearDown(): void
    {
        Convertor::$exchange_rates = $this->originalRates;
    }

    public function testConvertsAmountUsingTheAvailableRate(): void
    {
        self::assertSame(9.0, $this->convertor->convert(10.0, 'EUR'));
    }

    public function testGetsRateAndFullRateEntry(): void
    {
        self::assertSame(0.9, $this->convertor->getRate('EUR'));
        self::assertSame(Convertor::$exchange_rates['EUR'], $this->convertor->getExchangeRate('EUR'));
    }

    public function testGetsRateDateAndCurrencyCodes(): void
    {
        self::assertSame('2026-10-28', $this->convertor->getPublishDate('EUR'));
        self::assertSame('USD', $this->convertor->getBaseCurrency('EUR'));
        self::assertSame('EUR', $this->convertor->getQouteCurrency('EUR'));
    }

    public function testGetsEmptyArrayForUnavailableRateEntry(): void
    {
        self::assertSame([], $this->convertor->getExchangeRate('XXX'));
    }

    public function testConvertThrowsForUnavailableQuoteCurrency(): void
    {
        $this->expectException(QuoteCurrencyForExchangeNotSupportedException::class);
        $this->expectExceptionCode(1009);

        $this->convertor->convert(10.0, 'XXX');
    }

    public function testGetRateThrowsForUnavailableQuoteCurrency(): void
    {
        $this->expectException(QuoteCurrencyForExchangeNotSupportedException::class);
        $this->expectExceptionCode(1009);

        $this->convertor->getRate('XXX');
    }
}
