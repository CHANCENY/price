<?php

/**
 * This file is part of simp/price library published with MIT license.
 */

namespace Simp\Price\lib;

use DateTime;
use Simp\Price\Exception\FailedExchangeRateDownloadException;
use Simp\Price\Exception\QuoteCurrencyForExchangeNotSupportedException;

class Convertor
{
    public static $exchange_rates_source = "https://api.frankfurter.dev/v2/rates";
    public static $exchange_rates = [];

    /**
     * Loads exchange rates for the given base currency from the local cache,
     * downloading them from the configured source when needed.
     *
     * @param string $base_currency_code ISO currency code to use as the rate base.
     *
     * @throws FailedExchangeRateDownloadException If rates cannot be downloaded after repeated attempts.
     */
    public function __construct(string $base_currency_code = "USD")
    {
        // Look for date cached excahnge rates first if not exist download them.
        $cached_file = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "rates" . DIRECTORY_SEPARATOR .
            "exchange-ratings.json";
        if (!file_exists($cached_file)) {
            @mkdir(dirname($cached_file), recursive: true);
            @touch($cached_file);
        }


        if (file_exists($cached_file)) {

            $count = 0;
            top:
            $content_json = json_decode(file_get_contents($cached_file), true);
            if (empty($content_json)) {
                self::downloadExchangeRates($cached_file, $base_currency_code);
                $count += 1;

                if ($count > 2) {
                    throw new FailedExchangeRateDownloadException(self::$exchange_rates_source);
                }
                goto top;
            }

            $first_entry = array_first($content_json);
            $date_of_cached_rating = new DateTime($first_entry['date']);
            $now = new DateTime("now");

            // check if cached is of today
            if ($date_of_cached_rating->diff($now)->days > 0) {
                self::downloadExchangeRates($cached_file, $base_currency_code);
                $count += 1;

                if ($count > 2) {
                    throw new FailedExchangeRateDownloadException(self::$exchange_rates_source);
                }
                goto top;
            }

            foreach ($content_json as $entry) {
                self::$exchange_rates[$entry['quote']] = $entry;
            }
        }

    }

    /**
     * Downloads exchange rates for a base currency and writes the response to the cache file.
     *
     * @param string $cached_file        Path to the cache file to write.
     * @param string $base_currency_code ISO currency code to use as the rate base.
     */
    private static function downloadExchangeRates(string $cached_file, string $base_currency_code)
    {
        $curl = curl_init(self::$exchange_rates_source . http_build_query(['base' => $base_currency_code]));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $json = json_decode($response, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            file_put_contents($cached_file, json_encode($json, JSON_PRETTY_PRINT));
        }
    }

    /**
     * Converts an amount from the configured base currency to a quote currency.
     *
     * @param float  $number         Amount to convert.
     * @param string $quote_currency ISO currency code to convert to.
     *
     * @return float The converted amount.
     *
     * @throws QuoteCurrencyForExchangeNotSupportedException If the quote currency has no available rate.
     */
    public function convert(float $number, string $quote_currency = "EUR"): float
    {
        $quote_currency_rate = self::$exchange_rates[$quote_currency] ?? [];
        if (empty($quote_currency_rate)) {
            throw new QuoteCurrencyForExchangeNotSupportedException($quote_currency);
        }

        $rate = (float) $quote_currency_rate['rate'];


        return $number * $rate;
    }

    /**
     * Gets the exchange rate for a quote currency relative to the configured base currency.
     *
     * @param string $qoute_currency ISO currency code to look up.
     *
     * @return float|null The exchange rate.
     *
     * @throws QuoteCurrencyForExchangeNotSupportedException If the quote currency has no available rate.
     */
    public function getRate(string $qoute_currency): float|null
    {
        $qoute_currency_rate = self::$exchange_rates[$qoute_currency] ?? null;
        if (empty($qoute_currency_rate)) {
            throw new QuoteCurrencyForExchangeNotSupportedException($qoute_currency);
        }
        return $qoute_currency_rate['rate'];
    }

    /**
     * Gets the complete exchange-rate entry for a quote currency.
     *
     * @param string $qoute_currency ISO currency code to look up.
     *
     * @return array The rate entry, or an empty array if the currency is not available.
     */
    public function getExchangeRate(string $qoute_currency): array
    {
        $qoute_currency_rate = self::$exchange_rates[$qoute_currency] ?? [];
        return $qoute_currency_rate;
    }

    /**
     * Gets the publication date associated with a quote currency's exchange rate.
     *
     * @param string $qoute_currency ISO currency code to look up.
     *
     * @return string The rate publication date.
     */
    public function getPublishDate(string $qoute_currency): string
    {
        $qoute_currency_rate = self::$exchange_rates[$qoute_currency] ?? null;
        return $qoute_currency_rate['date'];
    }

    /**
     * Gets the base currency associated with a quote currency's exchange rate.
     *
     * @param string $qoute_currency ISO currency code to look up.
     *
     * @return string The base currency code.
     */
    public function getBaseCurrency(string $qoute_currency): string
    {
        $qoute_currency_rate = self::$exchange_rates[$qoute_currency] ?? null;
        return $qoute_currency_rate['base'];
    }

    /**
     * Gets the quote currency code for an exchange-rate entry.
     *
     * @param string $qoute_currency ISO currency code to look up.
     *
     * @return string The quote currency code.
     */
    public function getQouteCurrency(string $qoute_currency): string
    {
        $qoute_currency_rate = self::$exchange_rates[$qoute_currency] ?? null;
        return $qoute_currency_rate['quote'];
    }
}