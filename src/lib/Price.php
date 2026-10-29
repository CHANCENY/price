<?php

declare(strict_types=1);

/**
 * This file is part of simp/price library published with MIT license.
 */
namespace Simp\Price\lib;

use Simp\Price\Exception\DivisionByZeroException;

class Price
{
    protected float $original_number;
    protected float $adjustable_number;
    protected Convertor $convertor;
    protected Currency $currency;
    protected Formatter $formatter;
    protected Currency $original_ccurrency;

    /**
     * Creates a price amount in the specified currency.
     *
     * @param float  $number        Initial amount.
     * @param string $currency_code ISO 4217 currency code for the amount.
     */
    public function __construct(float $number, string $currency_code = 'USD')
    {
        $this->original_number = $number;
        $this->adjustable_number = $number;
        $this->currency = new Currency($currency_code);
        $this->formatter = new Formatter($currency_code);
        $this->convertor = new Convertor($currency_code);
        $this->original_ccurrency = new Currency($currency_code);
    }

    /**
     * Gets the current amount, including any applied operations or conversion.
     *
     * @return float The current amount.
     */
    public function getAmount(): float
    {
        return $this->adjustable_number;
    }

    /**
     * Gets the amount as it was when this object was constructed.
     *
     * @return float The original amount.
     */
    public function getOriginalAmount(): float
    {
        return $this->original_number;
    }

    /**
     * Gets the currency currently associated with the amount.
     *
     * @return Currency The current currency.
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * Gets the formatter configured for the current currency.
     *
     * @return Formatter The formatter.
     */
    public function getFormatter(): Formatter
    {
        return $this->formatter;
    }

    /**
     * Gets the exchange-rate convertor configured for the original currency.
     *
     * @return Convertor The convertor.
     */
    public function convertor(): Convertor
    {
        return $this->convertor;
    }

    /**
     * Returns the current amount as a string.
     *
     * @return string The current amount without currency formatting.
     */
    public function __toString()
    {
        return (string) $this->adjustable_number;
    }
    
    /**
     * Adds an amount to the current amount.
     *
     * @param float|Price $amount Amount to add.
     *
     * @return Price This instance, to allow method chaining.
     */
    public function add(float|Price $amount): Price
    {
        $this->adjustable_number += (float) (string) $amount; 
        return $this;
    }

    /**
     * Subtracts an amount from the current amount.
     *
     * @param float|Price $amount Amount to subtract.
     *
     * @return Price This instance, to allow method chaining.
     */
    public function subtract(float|Price $amount): Price
    {
        $this->adjustable_number -= (float) (string) $amount;
        return $this;
    }

    /**
     * Multiplies the current amount by another amount or factor.
     *
     * @param float|Price $amount Multiplier.
     *
     * @return Price This instance, to allow method chaining.
     */
    public function multiply(float|Price $amount): Price
    {
        $this->adjustable_number *= (float) (string) $amount;
        return $this;
    }

    /**
     * Divides the current amount by another amount or factor.
     *
     * @param float|Price $amount Divisor.
     *
     * @return Price This instance, to allow method chaining.
     *
     * @throws DivisionByZeroException If the divisor or current amount is zero.
     */
    public function divide(float|Price $amount): Price
    {
        if (((float)(string) $amount) != 0 && $this->adjustable_number != 0){
            $this->adjustable_number /= (float) (string) $amount;
            return $this;
        }

        throw new DivisionByZeroException("$this->adjustable_number / {$amount}");

    }

    /**
     * Rounds the current amount upward to the next integer.
     *
     * @return Price This instance, to allow method chaining.
     */
    public function roundUp(): Price
    {
        $this->adjustable_number = ceil($this->adjustable_number);
        return $this;
    }

    /**
     * Rounds the current amount to the nearest integer.
     *
     * @return Price This instance, to allow method chaining.
     */
    public function roundDown(): Price
    {
        $this->adjustable_number = round($this->adjustable_number);
        return $this;
    }

    /**
     * Rounds the current amount down to the nearest integer.
     *
     * @return Price This instance, to allow method chaining.
     */
    public function roundEven(): Price
    {
        $this->adjustable_number = floor($this->adjustable_number);
        return $this;
    }

    /**
     * Rounds the current amount down to the nearest integer.
     *
     * @return Price This instance, to allow method chaining.
     */
    public function roundOdd(): Price
    {
        $this->adjustable_number = floor($this->adjustable_number);
        return $this;
    }

    /**
     * Checks whether the current amount is evenly divisible by another amount.
     *
     * @param float|Price $amount Value to test as the divisor.
     *
     * @return bool True if the current amount is evenly divisible; otherwise false.
     */
    public function isDivisibleBy(float|Price $amount): bool
    {
        return $this->adjustable_number % (float) (string) $amount === 0;
    }

    /**
     * Checks whether the current amount is equal to another amount.
     *
     * @param float|Price $amount Amount to compare.
     *
     * @return bool True if the amounts are identical; otherwise false.
     */
    public function isEqual(float|Price $amount): bool
    {
        return (float)(string) $amount === $this->adjustable_number;
    }

    /**
     * Checks whether the current amount is less than another amount.
     *
     * @param float|Price $amount Amount to compare.
     *
     * @return bool True if the current amount is less; otherwise false.
     */
    public function isLessThan(float|Price $amount): bool
    {
        return $this->adjustable_number < (float)(string) $amount;
    }

    /**
     * Checks whether the current amount is greater than another amount.
     *
     * @param float|Price $amount Amount to compare.
     *
     * @return bool True if the current amount is greater; otherwise false.
     */
    public function isGreaterThan(float|Price $amount): bool
    {
        return $this->adjustable_number > (float)(string) $amount;
    }

    /**
     * Converts the current amount to another currency.
     *
     * @param string $quote_currency_code ISO 4217 code of the target currency.
     *
     * @return Price This instance, with the converted amount and currency.
     */
    public function convert(string $quote_currency_code): Price
    {
        $this->adjustable_number = $this->convertor->convert($this->adjustable_number, $quote_currency_code);
        $this->original_ccurrency = $this->currency;
        $this->currency = new Currency($quote_currency_code);
        return $this;
    }

    /**
     * Formats the current amount, optionally prefixing its currency symbol.
     *
     * @param bool $set_currency_symbol Whether to include the currency symbol.
     *
     * @return string The formatted amount.
     */
    public function format(bool $set_currency_symbol = true): string
    {
        if ($set_currency_symbol){
            return $this->currency->getSymbol(). $this->formatter->format($this->adjustable_number);
        }
        return $this->formatter->format($this->adjustable_number);
    }

    /**
     * Restores the original amount and currency from construction time.
     *
     * @return Price This instance, to allow method chaining.
     */
    public function resetToOriginal(): Price
    {
        $this->adjustable_number = $this->original_number;
        $this->currency = $this->original_ccurrency;
        return $this;
    }


}
