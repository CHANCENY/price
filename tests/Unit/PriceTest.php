<?php

namespace Simp\Price\Tests\Unit;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;
use Simp\Price\Exception\DivisionByZeroException;
use Simp\Price\Exception\QuoteCurrencyForExchangeNotSupportedException;
use Simp\Price\lib\Convertor;
use Simp\Price\lib\Currency;
use Simp\Price\lib\Formatter;
use Simp\Price\lib\Price;

final class PriceTest extends TestCase
{
    private array $originalRates;

    protected function setUp(): void
    {
        $this->originalRates = Convertor::$exchange_rates;
        Convertor::$exchange_rates = [
            'EUR' => ['date' => '2026-10-28', 'base' => 'USD', 'quote' => 'EUR', 'rate' => 0.9],
        ];
    }

    protected function tearDown(): void
    {
        Convertor::$exchange_rates = $this->originalRates;
    }

    public function testGetsAmountsAndDependencies(): void
    {
        $price = $this->makePrice(12.5);

        self::assertSame(12.5, $price->getAmount());
        self::assertSame(12.5, $price->getOriginalAmount());
        self::assertInstanceOf(Currency::class, $price->getCurrency());
        self::assertInstanceOf(Formatter::class, $price->getFormatter());
        self::assertInstanceOf(Convertor::class, $price->convertor());
        self::assertSame('12.5', (string) $price);
    }

    public function testAddSubtractAndMultiplyAcceptFloatOrPrice(): void
    {
        $price = $this->makePrice(10.0);
        $otherPrice = $this->makePrice(2.0);

        self::assertSame($price, $price->add(3.0));
        self::assertSame(13.0, $price->getAmount());
        self::assertSame(11.0, $price->subtract($otherPrice)->getAmount());
        self::assertSame(22.0, $price->multiply($otherPrice)->getAmount());
    }

    public function testDividesByFloatOrPrice(): void
    {
        $price = $this->makePrice(12.0);

        self::assertSame($price, $price->divide(3.0));
        self::assertSame(4.0, $price->getAmount());
        self::assertSame(2.0, $price->divide($this->makePrice(2.0))->getAmount());
    }

    public function testDivisionThrowsWhenDivisorOrCurrentAmountIsZero(): void
    {
        try {
            $this->makePrice(4.0)->divide(0.0);
            self::fail('Expected division by zero to throw.');
        } catch (DivisionByZeroException $exception) {
            self::assertSame(1010, $exception->getCode());
        }

        $this->expectException(DivisionByZeroException::class);
        $this->makePrice(0.0)->divide(2.0);
    }

    public function testRoundingMethodsMutateAndReturnThePrice(): void
    {
        $price = $this->makePrice(2.3);
        self::assertSame($price, $price->roundUp());
        self::assertSame(3.0, $price->getAmount());

        $price = $this->makePrice(2.6);
        self::assertSame($price, $price->roundDown());
        self::assertSame(3.0, $price->getAmount());

        $price = $this->makePrice(2.6);
        self::assertSame($price, $price->roundEven());
        self::assertSame(2.0, $price->getAmount());

        $price = $this->makePrice(2.6);
        self::assertSame($price, $price->roundOdd());
        self::assertSame(2.0, $price->getAmount());
    }

    public function testComparesAmountsAndDivisibility(): void
    {
        $price = $this->makePrice(12.0);

        self::assertTrue($price->isDivisibleBy(3.0));
        self::assertFalse($price->isDivisibleBy(5.0));
        self::assertTrue($price->isEqual($this->makePrice(12.0)));
        self::assertFalse($price->isEqual(12.01));
        self::assertTrue($price->isLessThan(13.0));
        self::assertFalse($price->isLessThan(12.0));
        self::assertTrue($price->isGreaterThan(11.0));
        self::assertFalse($price->isGreaterThan(12.0));
    }

    public function testConvertsAndUpdatesCurrentCurrency(): void
    {
        $price = $this->makePrice(10.0);

        self::assertSame($price, $price->convert('EUR'));
        self::assertSame(9.0, $price->getAmount());
        self::assertSame('EUR', $price->getCurrency()->getCode());
    }

    public function testConvertThrowsForUnsupportedQuoteCurrency(): void
    {
        $this->expectException(QuoteCurrencyForExchangeNotSupportedException::class);

        $this->makePrice(10.0)->convert('XXX');
    }

    public function testFormatsAmountWithAndWithoutCurrencySymbol(): void
    {
        $price = $this->makePrice(1234.5);

        self::assertSame('$1,234.50', $price->format());
        self::assertSame('1,234.50', $price->format(false));
    }

    public function testResetRestoresOriginalAmountAndCurrency(): void
    {
        $price = $this->makePrice(10.0);
        $price->convert('EUR')->add(1.0);

        self::assertSame($price, $price->resetToOriginal());
        self::assertSame(10.0, $price->getAmount());
        self::assertSame('USD', $price->getCurrency()->getCode());
    }

    private function makePrice(float $amount): Price
    {
        $price = (new ReflectionClass(Price::class))->newInstanceWithoutConstructor();
        $currency = new Currency('USD');
        $convertor = (new ReflectionClass(Convertor::class))->newInstanceWithoutConstructor();

        $this->setProperty($price, 'original_number', $amount);
        $this->setProperty($price, 'adjustable_number', $amount);
        $this->setProperty($price, 'currency', $currency);
        $this->setProperty($price, 'original_ccurrency', $currency);
        $this->setProperty($price, 'formatter', new Formatter('USD'));
        $this->setProperty($price, 'convertor', $convertor);

        return $price;
    }

    private function setProperty(object $object, string $name, mixed $value): void
    {
        (new ReflectionProperty($object, $name))->setValue($object, $value);
    }
}
