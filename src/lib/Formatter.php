<?php

/**
 * This file is part of simp/price library published with MIT license.
 */


namespace Simp\Price\lib;

class Formatter
{
    public static $formatters =
        [
            [
                'currency_code' => 'AFN',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'ALL',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'DZD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'AOA',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'ARS',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'AMD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'AWG',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'AUD',
                'decimals' => 2,
                'display_format' => '# ###.##'
            ],
            [
                'currency_code' => 'AZN',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'BSD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'BHD',
                'decimals' => 3,
                'display_format' => '#,###.###'
            ],
            [
                'currency_code' => 'BDT',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'BBD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'BYN',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'BYR',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'BZD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'BMD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'BTN',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'BOB',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'BAM',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'BWP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'BRL',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'BND',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'BGN',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'BIF',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'KHR',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'CAD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'CVE',
                'decimals' => null,
                'display_format' => null
            ],
            [
                'currency_code' => 'KYD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'XPF',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'CLP',
                'decimals' => 0,
                'display_format' => '#.###'
            ],
            [
                'currency_code' => 'CNY',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'COP',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'KMF',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'CRC',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'HRK',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'CUC',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'CUP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'CYP',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'CZK',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'DKK',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'DJF',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'DOP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'XCD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'EGP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'SVC',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'ERN',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'ETB',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'ATS',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'BEF',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'DEM',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'EEK',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'ESP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'EUR',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'FIM',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'FRF',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'GRD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'IEP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'ITL',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'LUF',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'NLG',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'PTE',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'FKP',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'FJD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'CDF',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'XAF',
                'decimals' => null,
                'display_format' => null
            ],
            [
                'currency_code' => 'GMD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'GEL',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'GHS',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'GHC',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'GIP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'GTQ',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'GYD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'HTG',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'HNL',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'HKD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'HUF',
                'decimals' => 0,
                'display_format' => '#.###'
            ],
            [
                'currency_code' => 'ISK',
                'decimals' => 0,
                'display_format' => '#.###'
            ],
            [
                'currency_code' => 'INR',
                'decimals' => 2,
                'display_format' => '#,##,###.##'
            ],
            [
                'currency_code' => 'IDR',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'IRR',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'IQD',
                'decimals' => 3,
                'display_format' => null
            ],
            [
                'currency_code' => 'JMD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'JPY',
                'decimals' => 0,
                'display_format' => '#,###'
            ],
            [
                'currency_code' => 'JOD',
                'decimals' => 3,
                'display_format' => '#,###.###'
            ],
            [
                'currency_code' => 'KZT',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'KES',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'KWD',
                'decimals' => 3,
                'display_format' => '#,###.###'
            ],
            [
                'currency_code' => 'KGS',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'LAK',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'LVL',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'LBP',
                'decimals' => 2,
                'display_format' => '# ###'
            ],
            [
                'currency_code' => 'LSL',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'LRD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'LYD',
                'decimals' => 3,
                'display_format' => null
            ],
            [
                'currency_code' => 'LTL',
                'decimals' => 2,
                'display_format' => '# ###,##'
            ],
            [
                'currency_code' => 'MOP',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'MKD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'MGA',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'MWK',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'MYR',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'MVR',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'MTL',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'MRO',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'MUR',
                'decimals' => 2,
                'display_format' => '#,###'
            ],
            [
                'currency_code' => 'MXN',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'MDL',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'MNT',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'MAD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'MZM',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'MZN',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'MMK',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'NAD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'NPR',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'ANG',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'ILS',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'TWD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'TRY',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'NZD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'NIO',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'NGN',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'KPW',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'NOK',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'PKR',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'PAB',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'PGK',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'PYG',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'PEN',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'UYU',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'PHP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'PLN',
                'decimals' => 2,
                'display_format' => '# ###,##'
            ],
            [
                'currency_code' => 'GBP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'QAR',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'OMR',
                'decimals' => 3,
                'display_format' => '#,###.###'
            ],
            [
                'currency_code' => 'RON',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'ROL',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'RUB',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'RWF',
                'decimals' => 0,
                'display_format' => null
            ],
            [
                'currency_code' => 'SAC',
                'decimals' => null,
                'display_format' => null
            ],
            [
                'currency_code' => 'SHP',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'WST',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'STD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'SAR',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'CSD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'RSD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'SCR',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'SLL',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'SGD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'SKK',
                'decimals' => 2,
                'display_format' => '# ###,##'
            ],
            [
                'currency_code' => 'SIT',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'SBD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'SOS',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'ZAR',
                'decimals' => 2,
                'display_format' => '# ###.##'
            ],
            [
                'currency_code' => 'KRW',
                'decimals' => 0,
                'display_format' => '#,###'
            ],
            [
                'currency_code' => 'LKR',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'SDD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'SRD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'SZL',
                'decimals' => 2,
                'display_format' => '#, ###.##'
            ],
            [
                'currency_code' => 'SEK',
                'decimals' => 2,
                'display_format' => '# ###,##'
            ],
            [
                'currency_code' => 'CHF',
                'decimals' => 2,
                'display_format' => '#\'###.##'
            ],
            [
                'currency_code' => 'SYP',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'TJS',
                'decimals' => null,
                'display_format' => null
            ],
            [
                'currency_code' => 'TZS',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'THB',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'TOP',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'TTD',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'TND',
                'decimals' => 3,
                'display_format' => null
            ],
            [
                'currency_code' => 'TMM',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'TMT',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'AED',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'UGX',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'UAH',
                'decimals' => 2,
                'display_format' => '# ###,##'
            ],
            [
                'currency_code' => 'CLF',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'USD',
                'decimals' => 2,
                'display_format' => '#,###.##'
            ],
            [
                'currency_code' => 'UZS',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'VUV',
                'decimals' => 0,
                'display_format' => '#,###'
            ],
            [
                'currency_code' => 'VEF',
                'decimals' => 2,
                'display_format' => '#.###,##'
            ],
            [
                'currency_code' => 'VND',
                'decimals' => 2,
                'display_format' => '#.###'
            ],
            [
                'currency_code' => 'YER',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'ZMK',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'ZMW',
                'decimals' => 2,
                'display_format' => null
            ],
            [
                'currency_code' => 'ZWD',
                'decimals' => 2,
                'display_format' => '# ###.##'
            ]
        ];

    private array $currency = [];

    /**
     * Creates a formatter using the configured rules for a currency code.
     *
     * @param string $currency_code ISO 4217 currency code to look up.
     */
    public function __construct(string $currency_code)
    {
        foreach (self::$formatters as $formatter) {
            if (strtolower($formatter['currency_code']) === strtolower($currency_code)) {
                $this->currency = $formatter;
            }
        }

    }

    /**
     * Formats a numeric amount according to this formatter's currency rules.
     *
     * @param float|string $number Numeric amount to format.
     *
     * @return string The formatted amount.
     */
    public function format(float|string $number): string
    {
        

        $display_format = $this->currency['display_format'] ?? '';
        $decimals = $this->currency['decimals'];

        if (empty($display_format) && empty($decimals)) {
            return number_format($number, 2, '.', '');
        }

        if (!empty($display_format)) {
            return  $this->formatByDisplayFormat((string) $number, $display_format);
        }

        if (!empty($decimals)) {
            return number_format($number, $decimals, '.', '');
        }

        return $number;
        
    }


    /**
     * Formats a numeric amount using the separators and decimal precision in a pattern.
     *
     * @param string $number Numeric amount to format.
     * @param string $format Display pattern used to determine separators and precision.
     *
     * @return string The formatted amount.
     *
     * @throws \InvalidArgumentException If the amount is not numeric.
     */
    private function formatByDisplayFormat(string $number, string $format): string
    {
        // Detect decimal separator from the last "." or ","
        $lastDot = strrpos($format, '.');
        $lastComma = strrpos($format, ',');

        $decimalSeparator = null;
        $thousandsSeparator = '';

        if ($lastDot !== false && $lastComma !== false) {
            // Both exist: whichever comes last is the decimal separator.
            if ($lastDot > $lastComma) {
                $decimalSeparator = '.';
                $thousandsSeparator = ',';
            } else {
                $decimalSeparator = ',';
                $thousandsSeparator = '.';
            }
        } elseif ($lastDot !== false) {
            $decimalSeparator = '.';
            $thousandsSeparator = ' ';
        } elseif ($lastComma !== false) {
            $decimalSeparator = ',';
            $thousandsSeparator = '.';
        }

        // Count decimal places in the format.
        $decimalPlaces = 0;

        if ($decimalSeparator !== null) {
            $position = strrpos($format, $decimalSeparator);
            $decimalPlaces = strlen($format) - $position - 1;
        }

        // Detect the thousands separator from the format.
        if (str_contains($format, ' ')) {
            $thousandsSeparator = ' ';
        } elseif (
            $lastDot !== false &&
            $lastComma === false &&
            $decimalSeparator === '.'
        ) {
            // A dot can be a thousands separator when there is no
            // decimal part, e.g. #.###.
            if ($decimalPlaces === 0) {
                $thousandsSeparator = '.';
                $decimalSeparator = null;
            }
        }

        // Normalize the input number.
        if (!is_numeric($number)) {
            throw new \InvalidArgumentException(
                "Invalid numeric value: {$number}"
            );
        }

        return number_format(
            (float) $number,
            $decimalPlaces,
            $decimalSeparator ?? '.',
            $thousandsSeparator
        );
    }




}