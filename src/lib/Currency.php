<?php

/**
 * This file is part of simp/price library published with MIT license.
 */

namespace Simp\Price\lib;

use Simp\Price\Exception\CurrencyNotFoundException;

class Currency
{
    public static $currencies = [
        'source' => 'https://www.westernunion.com/blog/en/us/world-currency-symbols-ultimate-guide/',
        'retrieved_from' => 'Western Union article indexed by web search',
        'note' => 'Rows transcribed from the page\'s tables. Values reflect the article and may contain source inaccuracies or outdated currency codes; this is not an authoritative ISO currency database.',
        'currencies_by_region' => [
            'Europe' => [
                [
                    'country' => 'Eurozone countries',
                    'currency' => 'Euro',
                    'symbol' => '€',
                    'code' => 'EUR'
                ],
                [
                    'country' => 'Albania',
                    'currency' => 'Albanian lek',
                    'symbol' => 'L',
                    'code' => 'ALL'
                ],
                [
                    'country' => 'Belarus',
                    'currency' => 'Belarusian ruble',
                    'symbol' => 'Br',
                    'code' => 'BYN'
                ],
                [
                    'country' => 'Bosnia and Herzegovina',
                    'currency' => 'Bosnia and Herzegovina convertible mark',
                    'symbol' => 'KM',
                    'code' => 'BAM'
                ],
                [
                    'country' => 'Bulgaria',
                    'currency' => 'Bulgarian lev',
                    'symbol' => 'лв',
                    'code' => 'BGN'
                ],
                [
                    'country' => 'Czechia',
                    'currency' => 'Czech koruna',
                    'symbol' => 'Kč',
                    'code' => 'CZK'
                ],
                [
                    'country' => 'Denmark',
                    'currency' => 'Danish krone',
                    'symbol' => 'kr',
                    'code' => 'DKK'
                ],
                [
                    'country' => 'Hungary',
                    'currency' => 'Hungarian forint',
                    'symbol' => 'ft',
                    'code' => 'HUF'
                ],
                [
                    'country' => 'Iceland',
                    'currency' => 'Icelandic króna',
                    'symbol' => 'kr, Íkr',
                    'code' => 'ISK'
                ],
                [
                    'country' => 'Liechtenstein',
                    'currency' => 'Swiss franc',
                    'symbol' => 'CHF',
                    'code' => 'CHF'
                ],
                [
                    'country' => 'Moldova',
                    'currency' => 'Moldovan leu',
                    'symbol' => 'L',
                    'code' => 'MDL'
                ],
                [
                    'country' => 'North Macedonia',
                    'currency' => 'Second Macedonian denar',
                    'symbol' => 'ден',
                    'code' => 'MKD'
                ],
                [
                    'country' => 'Norway',
                    'currency' => 'Norwegian krone',
                    'symbol' => 'kr',
                    'code' => 'NOK'
                ],
                [
                    'country' => 'Poland',
                    'currency' => 'Polish zloty',
                    'symbol' => 'zł',
                    'code' => 'PLN'
                ],
                [
                    'country' => 'Romania',
                    'currency' => 'Romanian leu',
                    'symbol' => 'lei',
                    'code' => 'RON'
                ],
                [
                    'country' => 'Russia',
                    'currency' => 'Russian ruble',
                    'symbol' => '₽',
                    'code' => 'RUB'
                ],
                [
                    'country' => 'Serbia',
                    'currency' => 'Serbian dinar',
                    'symbol' => 'RSD',
                    'code' => 'RSD'
                ],
                [
                    'country' => 'Sweden',
                    'currency' => 'Swedish krona',
                    'symbol' => 'kr',
                    'code' => 'SEK'
                ],
                [
                    'country' => 'Switzerland',
                    'currency' => 'Swiss franc',
                    'symbol' => 'CHF',
                    'code' => 'CHF'
                ],
                [
                    'country' => 'Turkey',
                    'currency' => 'Turkish lira',
                    'symbol' => '₺',
                    'code' => 'TRY'
                ],
                [
                    'country' => 'Ukraine',
                    'currency' => 'Ukrainian hryvna',
                    'symbol' => '₴',
                    'code' => 'UAH'
                ],
                [
                    'country' => 'United Kingdom',
                    'currency' => 'Pounds sterling',
                    'symbol' => '£',
                    'code' => 'GBP'
                ]
            ],
            'Americas' => [
                [
                    'country' => 'US dollar countries',
                    'currency' => 'US dollar',
                    'symbol' => '$',
                    'code' => 'USD'
                ],
                [
                    'country' => 'Eastern Caribbean States (OECS)',
                    'currency' => 'East Caribbean dollar',
                    'symbol' => '$',
                    'code' => 'XCD'
                ],
                [
                    'country' => 'Aruba',
                    'currency' => 'Aruban florin',
                    'symbol' => 'ƒ',
                    'code' => 'AWG'
                ],
                [
                    'country' => 'Argentina',
                    'currency' => 'Argentine peso',
                    'symbol' => '$',
                    'code' => 'ARS'
                ],
                [
                    'country' => 'The Bahamas',
                    'currency' => 'Bahamian dollar',
                    'symbol' => 'B$',
                    'code' => 'BSD'
                ],
                [
                    'country' => 'Barbados',
                    'currency' => 'Barbadian dollar',
                    'symbol' => '$',
                    'code' => 'BBD'
                ],
                [
                    'country' => 'Bermuda',
                    'currency' => 'Bermudian dollar',
                    'symbol' => '$',
                    'code' => 'BMD'
                ],
                [
                    'country' => 'Belize',
                    'currency' => 'Belize dollar',
                    'symbol' => 'BZ$',
                    'code' => 'BZD'
                ],
                [
                    'country' => 'Bolivia',
                    'currency' => 'Bolivian boliviano',
                    'symbol' => 'Bs',
                    'code' => 'BOB'
                ],
                [
                    'country' => 'Brazil',
                    'currency' => 'Brazilian real',
                    'symbol' => 'R$',
                    'code' => 'BRL'
                ],
                [
                    'country' => 'Canada',
                    'currency' => 'Canadian dollar',
                    'symbol' => 'CA$',
                    'code' => 'CAD'
                ],
                [
                    'country' => 'Cayman Islands',
                    'currency' => 'Cayman Islands dollar',
                    'symbol' => 'CI$',
                    'code' => 'KYD'
                ],
                [
                    'country' => 'Chile',
                    'currency' => 'Chilean peso',
                    'symbol' => '$',
                    'code' => 'CLP'
                ],
                [
                    'country' => 'Colombia',
                    'currency' => 'Colombian peso',
                    'symbol' => '$',
                    'code' => 'COP'
                ],
                [
                    'country' => 'Costa Rica',
                    'currency' => 'Costa Rican colón',
                    'symbol' => '₡',
                    'code' => 'CRC'
                ],
                [
                    'country' => 'Cuba',
                    'currency' => 'Cuban peso',
                    'symbol' => 'CUC$',
                    'code' => 'CUP'
                ],
                [
                    'country' => 'Curaçao',
                    'currency' => 'Netherlands Antillean guilder',
                    'symbol' => 'ƒ',
                    'code' => 'ANG'
                ],
                [
                    'country' => 'Dominican Republic',
                    'currency' => 'Dominican peso',
                    'symbol' => 'RD$',
                    'code' => 'DOP'
                ],
                [
                    'country' => 'Falkland Islands',
                    'currency' => 'Falkland Islands pound',
                    'symbol' => 'FK£',
                    'code' => 'FKP'
                ],
                [
                    'country' => 'Guatemala',
                    'currency' => 'Guatemalan quetzal',
                    'symbol' => 'Q',
                    'code' => 'GTQ'
                ],
                [
                    'country' => 'Guyana',
                    'currency' => 'Guyanese dollar',
                    'symbol' => 'G$',
                    'code' => 'GYD'
                ],
                [
                    'country' => 'Haiti',
                    'currency' => 'Haitian gourde',
                    'symbol' => 'G',
                    'code' => 'HTG'
                ],
                [
                    'country' => 'Honduras',
                    'currency' => 'Honduran lempira',
                    'symbol' => 'L',
                    'code' => 'HNL'
                ],
                [
                    'country' => 'Jamaica',
                    'currency' => 'Jamaican dollar',
                    'symbol' => 'J$',
                    'code' => 'JMD'
                ],
                [
                    'country' => 'Mexico',
                    'currency' => 'Mexican peso',
                    'symbol' => '$',
                    'code' => 'MXN'
                ],
                [
                    'country' => 'Nicaragua',
                    'currency' => 'Nicaraguan córdoba',
                    'symbol' => 'C$',
                    'code' => 'NIO'
                ],
                [
                    'country' => 'Panama',
                    'currency' => 'Panamanian balboa',
                    'symbol' => 'B/.',
                    'code' => 'PAB'
                ],
                [
                    'country' => 'Paraguay',
                    'currency' => 'Paraguayan guaraní',
                    'symbol' => '₲',
                    'code' => 'PYG'
                ],
                [
                    'country' => 'Peru',
                    'currency' => 'Peruvian sol',
                    'symbol' => 'S/.',
                    'code' => 'PEN'
                ],
                [
                    'country' => 'Sint Maarten',
                    'currency' => 'Netherlands Antillean guilder',
                    'symbol' => 'ƒ',
                    'code' => 'ANG'
                ],
                [
                    'country' => 'Suriname',
                    'currency' => 'Surinamese dollar',
                    'symbol' => 'Sr$',
                    'code' => 'SRD'
                ],
                [
                    'country' => 'Trinidad and Tobago',
                    'currency' => 'Trinidad and Tobago dollar',
                    'symbol' => 'TT$',
                    'code' => 'TTD'
                ],
                [
                    'country' => 'Uruguay',
                    'currency' => 'Uruguayan peso',
                    'symbol' => '$U',
                    'code' => 'UYU'
                ],
                [
                    'country' => 'Venezuela',
                    'currency' => 'Venezuelan bolívar',
                    'symbol' => 'Bs.',
                    'code' => 'VED'
                ],
                [
                    'country' => 'Belize',
                    'currency' => 'Belize dollar',
                    'symbol' => 'BZ$',
                    'code' => 'BZD'
                ]
            ],
            'Middle East' => [
                [
                    'country' => 'Bahrain',
                    'currency' => 'Bahraini dinar',
                    'symbol' => '.د.ب',
                    'code' => 'BHD'
                ],
                [
                    'country' => 'Iraq',
                    'currency' => 'Iraqi dinar',
                    'symbol' => 'ع.د',
                    'code' => 'IQD'
                ],
                [
                    'country' => 'Iran',
                    'currency' => 'Iranian rial',
                    'symbol' => '﷼',
                    'code' => 'IRR'
                ],
                [
                    'country' => 'Israel',
                    'currency' => 'New Israeli shekel',
                    'symbol' => '₪',
                    'code' => 'ILS'
                ],
                [
                    'country' => 'Jordan',
                    'currency' => 'Jordanian dinar',
                    'symbol' => 'ينار',
                    'code' => 'JOD'
                ],
                [
                    'country' => 'Kuwait',
                    'currency' => 'Kuwaiti dinar',
                    'symbol' => 'ك',
                    'code' => 'KWD'
                ],
                [
                    'country' => 'Lebanon',
                    'currency' => 'Lebanese pound',
                    'symbol' => 'ل.ل',
                    'code' => 'LBP'
                ],
                [
                    'country' => 'Oman',
                    'currency' => 'Omani rial',
                    'symbol' => 'ر.ع',
                    'code' => 'OMR'
                ],
                [
                    'country' => 'Palestine',
                    'currency' => 'Israeli shekel',
                    'symbol' => '₪',
                    'code' => 'ILS'
                ],
                [
                    'country' => 'Qatar',
                    'currency' => 'Qatari riyal',
                    'symbol' => 'ر.ق',
                    'code' => 'QAR'
                ],
                [
                    'country' => 'Saudi Arabia',
                    'currency' => 'Saudi riyal',
                    'symbol' => 'SR',
                    'code' => 'SAR'
                ],
                [
                    'country' => 'Syria',
                    'currency' => 'Syrian pound',
                    'symbol' => '£S',
                    'code' => 'SYP'
                ],
                [
                    'country' => 'United Arab Emirates (UAE)',
                    'currency' => 'Emirati dirham',
                    'symbol' => 'AED',
                    'code' => 'AED'
                ],
                [
                    'country' => 'Yemen',
                    'currency' => 'Yemeni rial',
                    'symbol' => '﷼',
                    'code' => 'YER'
                ]
            ],
            'Africa' => [
                [
                    'country' => 'Central Africa',
                    'currency' => 'CFA franc',
                    'symbol' => 'FCFA',
                    'code' => 'XAF'
                ],
                [
                    'country' => 'West Africa',
                    'currency' => 'CFA franc',
                    'symbol' => 'CFA',
                    'code' => 'XOF'
                ],
                [
                    'country' => 'Algeria',
                    'currency' => 'Algerian dinar',
                    'symbol' => 'دج',
                    'code' => 'DZD'
                ],
                [
                    'country' => 'Angola',
                    'currency' => 'Angolan kwanza',
                    'symbol' => 'Kz',
                    'code' => 'AOA'
                ],
                [
                    'country' => 'Botswana',
                    'currency' => 'Botswana pula',
                    'symbol' => 'P',
                    'code' => 'BWP'
                ],
                [
                    'country' => 'Burundi',
                    'currency' => 'Burundian franc',
                    'symbol' => 'FBu',
                    'code' => 'BIF'
                ],
                [
                    'country' => 'Cabo Verde',
                    'currency' => 'Cape Verdean escudo',
                    'symbol' => 'CVE',
                    'code' => 'CVE'
                ],
                [
                    'country' => 'Comoros',
                    'currency' => 'Comoran franc',
                    'symbol' => 'CF',
                    'code' => 'KMF'
                ],
                [
                    'country' => 'Democratic Republic of Congo',
                    'currency' => 'Congolese franc',
                    'symbol' => 'FC',
                    'code' => 'CDF'
                ],
                [
                    'country' => 'Djibouti',
                    'currency' => 'Djiboutian franc',
                    'symbol' => 'Fdj',
                    'code' => 'DJF'
                ],
                [
                    'country' => 'Egypt',
                    'currency' => 'Egyptian pound',
                    'symbol' => 'E£',
                    'code' => 'EGP'
                ],
                [
                    'country' => 'Eritrea',
                    'currency' => 'Eritrean nakfa',
                    'symbol' => 'Nkf',
                    'code' => 'ERN'
                ],
                [
                    'country' => 'Ethiopia',
                    'currency' => 'Ethiopian birr',
                    'symbol' => 'Br',
                    'code' => 'ETB'
                ],
                [
                    'country' => 'Eswatini',
                    'currency' => 'Lilangeni',
                    'symbol' => 'L',
                    'code' => 'SZL'
                ],
                [
                    'country' => 'Gambia',
                    'currency' => 'Dalasi',
                    'symbol' => 'D',
                    'code' => 'GMD'
                ],
                [
                    'country' => 'Ghana',
                    'currency' => 'Ghanaian cedi',
                    'symbol' => 'GH₵',
                    'code' => 'GHS'
                ],
                [
                    'country' => 'Guinea',
                    'currency' => 'Guinean franc',
                    'symbol' => 'FG',
                    'code' => 'GNF'
                ],
                [
                    'country' => 'Kenya',
                    'currency' => 'Kenyan shilling',
                    'symbol' => 'KSh',
                    'code' => 'KES'
                ],
                [
                    'country' => 'Lesotho',
                    'currency' => 'Lesotho loti',
                    'symbol' => 'L',
                    'code' => 'LSL'
                ],
                [
                    'country' => 'Liberia',
                    'currency' => 'Liberian dollar',
                    'symbol' => 'LD$',
                    'code' => 'LRD'
                ],
                [
                    'country' => 'Libya',
                    'currency' => 'Libyan dinar',
                    'symbol' => 'LD',
                    'code' => 'LYD'
                ],
                [
                    'country' => 'Madagascar',
                    'currency' => 'Malagasy ariary',
                    'symbol' => 'Ar',
                    'code' => 'MGA'
                ],
                [
                    'country' => 'Malawi',
                    'currency' => 'Malawian kwacha',
                    'symbol' => 'K',
                    'code' => 'MWK'
                ],
                [
                    'country' => 'Mauritania',
                    'currency' => 'Ouguiya',
                    'symbol' => 'UM',
                    'code' => 'MRU'
                ],
                [
                    'country' => 'Mauritius',
                    'currency' => 'Mauritian rupee',
                    'symbol' => 'Rs',
                    'code' => 'MUR'
                ],
                [
                    'country' => 'Morocco',
                    'currency' => 'Moroccan dirham',
                    'symbol' => 'DH',
                    'code' => 'MAD'
                ],
                [
                    'country' => 'Mozambique',
                    'currency' => 'Mozambican metical',
                    'symbol' => 'MT',
                    'code' => 'MZN'
                ],
                [
                    'country' => 'Namibia',
                    'currency' => 'Namibian dollar',
                    'symbol' => 'N$',
                    'code' => 'NAD'
                ],
                [
                    'country' => 'Nigeria',
                    'currency' => 'Nigerian naira',
                    'symbol' => '₦',
                    'code' => 'NGN'
                ],
                [
                    'country' => 'Rwanda',
                    'currency' => 'Rwandan franc',
                    'symbol' => 'R₣',
                    'code' => 'RWF'
                ],
                [
                    'country' => 'São Tomé and Príncipe',
                    'currency' => 'São Tomé and Príncipe dobra',
                    'symbol' => 'Db',
                    'code' => 'STN'
                ],
                [
                    'country' => 'Seychelles',
                    'currency' => 'Seychellois rupee',
                    'symbol' => 'SR',
                    'code' => 'SCR'
                ],
                [
                    'country' => 'Sierra Leone',
                    'currency' => 'Sierra Leonean leone',
                    'symbol' => 'Le',
                    'code' => 'SLL'
                ],
                [
                    'country' => 'Somalia',
                    'currency' => 'Somali shilling',
                    'symbol' => 'Sh.So.',
                    'code' => 'SOS'
                ],
                [
                    'country' => 'South Africa',
                    'currency' => 'South African rand',
                    'symbol' => 'R',
                    'code' => 'ZAR'
                ],
                [
                    'country' => 'South Sudan',
                    'currency' => 'South Sudanese pound',
                    'symbol' => 'SS£',
                    'code' => 'SSP'
                ],
                [
                    'country' => 'Sudan',
                    'currency' => 'Sudanese pound',
                    'symbol' => 'SDG',
                    'code' => 'SDG'
                ],
                [
                    'country' => 'Tanzania',
                    'currency' => 'Tanzanian shilling',
                    'symbol' => 'TSh',
                    'code' => 'TZS'
                ],
                [
                    'country' => 'Tunisia',
                    'currency' => 'Tunisian dinar',
                    'symbol' => 'د.ت',
                    'code' => 'TND'
                ],
                [
                    'country' => 'Uganda',
                    'currency' => 'Ugandan shilling',
                    'symbol' => 'USh',
                    'code' => 'UGX'
                ],
                [
                    'country' => 'Zambia',
                    'currency' => 'Zambian Kwacha',
                    'symbol' => 'K',
                    'code' => 'ZMK'
                ],
                [
                    'country' => 'Zimbabwe',
                    'currency' => 'United States dollar',
                    'symbol' => '$',
                    'code' => 'USD'
                ]
            ],
            'Asia and Oceania' => [
                [
                    'country' => 'Afghanistan',
                    'currency' => 'Afghan afghani',
                    'symbol' => '؋',
                    'code' => 'AFN'
                ],
                [
                    'country' => 'Armenia',
                    'currency' => 'Armenian dram',
                    'symbol' => '֏, դր',
                    'code' => 'AMD'
                ],
                [
                    'country' => 'Azerbaijan',
                    'currency' => 'Azerbaijani manat',
                    'symbol' => '₼',
                    'code' => 'AZN'
                ],
                [
                    'country' => 'Australia',
                    'currency' => 'Australian dollar',
                    'symbol' => 'A$',
                    'code' => 'AUD'
                ],
                [
                    'country' => 'Bangladesh',
                    'currency' => 'Bangladeshi taka',
                    'symbol' => '৳',
                    'code' => 'BDT'
                ],
                [
                    'country' => 'Bhutan',
                    'currency' => 'Bhutanese ngultrum',
                    'symbol' => 'Nu',
                    'code' => 'BTN'
                ],
                [
                    'country' => 'Brunei',
                    'currency' => 'Brunei dollar',
                    'symbol' => 'B$',
                    'code' => 'BND'
                ],
                [
                    'country' => 'Cambodia',
                    'currency' => 'Cambodian riel',
                    'symbol' => '៛',
                    'code' => 'KHR'
                ],
                [
                    'country' => 'China',
                    'currency' => 'Renminbi (Chinese yuan)',
                    'symbol' => '¥',
                    'code' => 'CNY'
                ],
                [
                    'country' => 'Georgia',
                    'currency' => 'Lari',
                    'symbol' => 'ლარი',
                    'code' => 'GEL'
                ],
                [
                    'country' => 'Hong Kong',
                    'currency' => 'Hong Kong dollar',
                    'symbol' => 'HK$',
                    'code' => 'HKD'
                ],
                [
                    'country' => 'Indonesia',
                    'currency' => 'Indonesian rupiah',
                    'symbol' => 'Rp',
                    'code' => 'IDR'
                ],
                [
                    'country' => 'India',
                    'currency' => 'Indian rupee',
                    'symbol' => '₹',
                    'code' => 'INR'
                ],
                [
                    'country' => 'Japan',
                    'currency' => 'Japanese yen',
                    'symbol' => '¥',
                    'code' => 'JPY'
                ],
                [
                    'country' => 'Kazakhstan',
                    'currency' => 'Kazakhstani tenge',
                    'symbol' => '₸',
                    'code' => 'KZT'
                ],
                [
                    'country' => 'Kyrgyzstan',
                    'currency' => 'Kyrgyzstani som',
                    'symbol' => 'som',
                    'code' => 'KGS'
                ],
                [
                    'country' => 'Laos',
                    'currency' => 'Lao kip',
                    'symbol' => '₭',
                    'code' => 'LAK'
                ],
                [
                    'country' => 'Macau',
                    'currency' => 'Macanese pataca',
                    'symbol' => 'MOP$',
                    'code' => 'MOP'
                ],
                [
                    'country' => 'Malaysia',
                    'currency' => 'Malaysian ringgit',
                    'symbol' => 'RM',
                    'code' => 'MYR'
                ],
                [
                    'country' => 'Maldives',
                    'currency' => 'Maldivian rufiyaa',
                    'symbol' => 'MRf',
                    'code' => 'MVR'
                ],
                [
                    'country' => 'Mongolia',
                    'currency' => 'Mongolian tögrög',
                    'symbol' => '₮',
                    'code' => 'MNT'
                ],
                [
                    'country' => 'Myanmar',
                    'currency' => 'Kyat',
                    'symbol' => 'K',
                    'code' => 'MMK'
                ],
                [
                    'country' => 'Nepal',
                    'currency' => 'Nepalese rupee',
                    'symbol' => 'Rs',
                    'code' => 'NPR'
                ],
                [
                    'country' => 'New Zealand',
                    'currency' => 'New Zealand dollar',
                    'symbol' => '$',
                    'code' => 'NZD'
                ],
                [
                    'country' => 'North Korea',
                    'currency' => 'North Korean won',
                    'symbol' => '₩',
                    'code' => 'KPW'
                ],
                [
                    'country' => 'Pakistan',
                    'currency' => 'Pakistani rupee',
                    'symbol' => 'Rs',
                    'code' => 'PKR'
                ],
                [
                    'country' => 'Philippines',
                    'currency' => 'Philippine peso',
                    'symbol' => '₱',
                    'code' => 'PHP'
                ],
                [
                    'country' => 'Singapore',
                    'currency' => 'Singapore dollar',
                    'symbol' => 'S$',
                    'code' => 'SGD'
                ],
                [
                    'country' => 'South Korea',
                    'currency' => 'South Korean won',
                    'symbol' => '₩',
                    'code' => 'KRW'
                ],
                [
                    'country' => 'Sri Lanka',
                    'currency' => 'Sri Lankan rupee',
                    'symbol' => 'Rs',
                    'code' => 'LKR'
                ],
                [
                    'country' => 'Taiwan',
                    'currency' => 'New Taiwan dollar',
                    'symbol' => 'NT$',
                    'code' => 'TWD'
                ],
                [
                    'country' => 'Tajikistan',
                    'currency' => 'Somoni',
                    'symbol' => 'TJS',
                    'code' => 'TJS'
                ],
                [
                    'country' => 'Timor-Leste',
                    'currency' => 'United States dollar',
                    'symbol' => '$',
                    'code' => 'USD'
                ],
                [
                    'country' => 'Thailand',
                    'currency' => 'Thai baht',
                    'symbol' => '฿',
                    'code' => 'THB'
                ],
                [
                    'country' => 'Turkmenistan',
                    'currency' => 'Turkmen new manat',
                    'symbol' => 'm',
                    'code' => 'TMT'
                ],
                [
                    'country' => 'Uzbekistan',
                    'currency' => 'Uzbekistan som',
                    'symbol' => 'som',
                    'code' => 'UZS'
                ],
                [
                    'country' => 'Vietnam',
                    'currency' => 'Vietnamese đồng',
                    'symbol' => '₫',
                    'code' => 'VND'
                ]
            ]
        ],
        'cryptocurrencies' => [
            [
                'currency' => 'Bitcoin',
                'symbol' => '₿',
                'code' => 'XBT'
            ],
             [
                'currency' => 'Bitcoin',
                'symbol' => '₿',
                'code' => 'BTC'
            ],
            [
                'currency' => 'Binance coin / BNB',
                'symbol' => 'BNB',
                'code' => 'BNB'
            ],
            [
                'currency' => 'Ethereum',
                'symbol' => 'Ξ',
                'code' => 'ETH'
            ],
            [
                'currency' => 'Solana',
                'symbol' => 'SOL',
                'code' => 'SOL'
            ],
            [
                'currency' => 'Tether',
                'symbol' => '₮',
                'code' => 'USDT'
            ],
            [
                'currency' => 'Ripples',
                'symbol' => 'XRP',
                'code' => 'XRP'
            ]
        ]
    ];

    private array $currency = [];

    public array $currency_group = [];

    /**
     * Selects a currency by searching the requested currency group.
     *
     * The "normal" group searches regional currencies; any other value searches
     * cryptocurrencies. The code match is case-insensitive and uses substring
     * matching.
     *
     * @param string $currency_code  Currency code or code fragment to search for.
     * @param string $currency_group Group selector; "normal" selects regional currencies.
     *
     * @throws CurrencyNotFoundException If no currency is selected.
     */
    public function __construct(string $currency_code = 'USD', string $currency_group = 'normal')
    {
        $group = $currency_group === 'normal' ? 'currencies_by_region' : 'cryptocurrencies';

        $this->currency_group = self::$currencies[$group] ?? [];

        foreach ($this->currency_group as $currencies) {
            if ($group === "currencies_by_region") {

                foreach ($currencies as $currency) {

                    if (str_contains(strtolower($currency['code']), strtolower($currency_code))) {
                        $this->currency = $currency;
                    }
                }
            } else {

                if (str_contains(strtolower($currencies['code']), strtolower($currency_code))) {
                    $this->currency = $currencies;
                }
            }


        }

        if ($this->currency === []) {
            throw new CurrencyNotFoundException($currency_code);
        }
    }

    /**
     * Returns the selected currency's data.
     *
     * @return array<string, string>
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }
    /**
     * Returns the currencies in the selected group.
     *
     * Regional currencies are grouped by region; cryptocurrencies are a flat list.
     */
    public function getCurrencyGroup(): array
    {
        return $this->currency_group;
    }
    /**
     * Returns the selected currency's code.
     */
    public function getCode(): string
    {
        return $this->currency['code'];
    }
    /**
     * Returns the selected currency's symbol.
     */
    public function getSymbol(): string
    {
        return $this->currency['symbol'];
    }
    /**
     * Returns the selected currency's name.
     */
    public function getName(): string
    {
        return $this->currency['currency'];
    }
    /**
     * Returns the selected currency's country.
     *
     * The selected entry must define a country; cryptocurrency entries do not.
     */
    public function getCountry(): string
    {
        return $this->currency['country'];
    }
}