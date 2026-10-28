<?php

namespace Simp\Price\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Simp\Price\Exception\CurrencyNotFoundException;
use Simp\Price\lib\Currency;

final class CurrencyTest extends TestCase
{
    public function testSelectsCurrencyCaseInsensitivelyAndExposesItsDetails(): void
    {
        $currency = new Currency('usd');

        self::assertSame('USD', $currency->getCode());
        self::assertSame('United States dollar', $currency->getName());
        self::assertSame('$', $currency->getSymbol());
        self::assertSame($currency->getCurrency()['country'], $currency->getCountry());
        self::assertContains(
            $currency->getCurrency(),
            array_merge(...array_values($currency->getCurrencyGroup()))
        );
    }

    public function testSelectsCryptocurrencyFromNonNormalGroup(): void
    {
        $currency = new Currency('BTC', 'crypto');

        self::assertSame('BTC', $currency->getCode());
        self::assertSame('Bitcoin', $currency->getName());
        self::assertSame('₿', $currency->getSymbol());
        self::assertNotEmpty($currency->getCurrencyGroup());
    }

    public function testUnsupportedCurrencyThrows(): void
    {
        $this->expectException(CurrencyNotFoundException::class);
        $this->expectExceptionCode(1007);

        new Currency('NOT-A-CURRENCY');
    }
}
