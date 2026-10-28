# simp/price

`simp/price` is a PHP library for working with monetary amounts. It provides
currency metadata, currency-aware number formatting, exchange-rate conversion,
and a mutable `Price` object for common amount operations.

## Features

- Look up currency codes, names, symbols, and associated country or region data.
- Access a built-in list of cryptocurrency metadata.
- Format amounts using currency-specific decimal and separator patterns.
- Add, subtract, multiply, divide, compare, and round price amounts.
- Convert amounts using rates from the Frankfurter API, with rates cached locally.
- Restore a `Price` object to its original amount and currency.

## Requirements

- PHP 8.5 or later. The current exchange-rate cache implementation uses PHP's
  `array_first()` function.
- The PHP cURL extension to download exchange rates when a fresh cache is not
  available.

## Installation

Install the package with Composer:

```sh
composer require simp/price
```

In a project using Composer, load its autoloader:

```php
require __DIR__ . '/vendor/autoload.php';
```

## Quick start

Create a `Price` with an amount and ISO currency code. The currency defaults to
USD:

```php
use Simp\Price\lib\Price;

$price = new Price(19.99, 'USD');

echo $price->format();        // $19.99
echo $price->format(false);   // 19.99
echo $price->getAmount();     // 19.99
```

`Price` operations update the same object and return it, so they can be chained:

```php
$price
    ->add(5.00)
    ->subtract(2.50)
    ->multiply(2);

echo $price->format(); // $44.98
```

## Working with `Price`

```php
use Simp\Price\lib\Price;

$price = new Price(12.50, 'USD');

$price->getAmount();         // Current amount, as a float
$price->getOriginalAmount(); // Amount passed to the constructor
$price->getCurrency();       // Currency object for the current currency
$price->getFormatter();      // Formatter configured for the initial currency
$price->convertor();         // Exchange-rate convertor
(string) $price;              // Current amount without currency formatting
```

The arithmetic and comparison methods accept either a `float` or another
`Price`:

```php
$price->add(2.50);
$price->subtract(new Price(1.00));
$price->multiply(3);
$price->divide(2);

$price->isEqual(10.00);
$price->isLessThan(20.00);
$price->isGreaterThan(5.00);
$price->isDivisibleBy(2);
```

`divide()` throws `Simp\Price\Exception\DivisionByZeroException` if the divisor
is zero or if the current amount is zero.

The rounding methods mutate and return the `Price`:

```php
$price->roundUp();
$price->roundDown();
$price->roundEven();
$price->roundOdd();
```

In the current implementation, `roundUp()` uses `ceil()`, `roundDown()` uses
PHP's `round()` (nearest integer), and both `roundEven()` and `roundOdd()` use
`floor()`. Despite their names, the last two do not currently round to the
nearest even or odd integer.

To restore the amount and currency to their constructor values:

```php
$price->resetToOriginal();
```

## Currency metadata

Use `Currency` to look up metadata by code. Codes are matched without regard to
case:

```php
use Simp\Price\lib\Currency;

$usd = new Currency('usd');

echo $usd->getCode();   // USD
echo $usd->getName();   // Currency name from the built-in data
echo $usd->getSymbol(); // $
echo $usd->getCountry();
```

The complete selected entry and the selected currency group are also available:

```php
$usd->getCurrency();
$usd->getCurrencyGroup();
```

To search the built-in cryptocurrency list, pass any group selector other than
`normal`:

```php
$bitcoin = new Currency('BTC', 'crypto');

echo $bitcoin->getName();   // Bitcoin
echo $bitcoin->getSymbol(); // ₿
```

Unsupported codes throw
`Simp\Price\Exception\CurrencyNotFoundException`. Currency metadata is static
data bundled with the package; it may be outdated or contain inaccuracies.
Cryptocurrency entries do not provide country data, so `getCountry()` is for
entries that define a country.

## Number formatting

Use `Formatter` directly when you only need a formatted amount:

```php
use Simp\Price\lib\Formatter;

$usdFormatter = new Formatter('USD');
echo $usdFormatter->format(1234.5); // 1,234.50

$europeanFormatter = new Formatter('ARS');
echo $europeanFormatter->format(1234.5); // 1.234,50
```

`Price::format()` uses the formatter created for the initial currency and can
include the current currency symbol:

```php
$price->format();       // Formatted amount prefixed with the currency symbol
$price->format(false);  // Formatted amount without the symbol
```

## Currency conversion

`Price::convert()` converts the current amount to a target currency code and
updates the `Price` object's currency:

```php
use Simp\Price\lib\Price;

$price = new Price(100, 'USD');
$price->convert('EUR');

echo $price->getAmount();        // Converted amount
echo $price->getCurrency()->getCode(); // EUR
```

The `Convertor` class can also be used directly:

```php
use Simp\Price\lib\Convertor;

$convertor = new Convertor('USD');
$rate = $convertor->getRate('EUR');
$convertedAmount = $convertor->convert(100, 'EUR');
$rateDate = $convertor->getPublishDate('EUR');
```

The convertor loads rates for its base currency from
`src/rates/exchange-ratings.json`. If the cache is missing, empty, or not from
the current date, it attempts to download rates from the configured Frankfurter
API source. This means construction may require network access and a writable
cache directory. A failed download may raise
`Simp\Price\Exception\FailedExchangeRateDownloadException`. A missing quote
currency raises
`Simp\Price\Exception\QuoteCurrencyForExchangeNotSupportedException`.

The formatter held by a `Price` is initialized for its original currency and
is not replaced by `convert()`. If you need formatting rules for the converted
currency, create a `Formatter` for that currency explicitly.

## Exceptions

The package defines these exceptions:

- `Simp\Price\Exception\CurrencyNotFoundException` — the requested currency
  could not be found in the bundled metadata.
- `Simp\Price\Exception\FailedExchangeRateDownloadException` — exchange rates
  could not be downloaded after retries.
- `Simp\Price\Exception\QuoteCurrencyForExchangeNotSupportedException` — no
  rate is available for the requested quote currency.
- `Simp\Price\Exception\DivisionByZeroException` — division was attempted with
  a zero divisor or a zero current amount.

## Running tests

The test suite uses PHPUnit:

```sh
vendor/bin/phpunit
```

Conversion tests use controlled in-memory exchange rates; they do not depend on
the live API.

## License

This package is published under the MIT license.
