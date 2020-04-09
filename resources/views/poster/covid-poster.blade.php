<?php

    $max_case_today = 0;
    $max_death_today = 0;
    $max_case_total = 0;
    $max_death_total = 0;
    $i = 0;


    function getCode($country){
        $countries = array
        (
            'AF' => 'Afghanistan',
            'AX' => 'Aland Islands',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua And Barbuda',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia And Herzegovina',
            'BW' => 'Botswana',
            'BV' => 'Bouvet Island',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'BN' => 'Brunei Darussalam',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CG' => 'Congo',
            'CD' => 'Congo, Democratic Republic',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'CI' => 'Cote D\'Ivoire',
            'HR' => 'Croatia',
            'CU' => 'Cuba',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands (Malvinas)',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernsey',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HM' => 'Heard Island & Mcdonald Islands',
            'VA' => 'Holy See (Vatican City State)',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran, Islamic Republic Of',
            'IQ' => 'Iraq',
            'IE' => 'Ireland',
            'IM' => 'Isle Of Man',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JE' => 'Jersey',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'KR' => 'Korea',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Lao People\'s Democratic Republic',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libyan Arab Jamahiriya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macao',
            'MK' => 'Macedonia',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia, Federated States Of',
            'MD' => 'Moldova',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'AN' => 'Netherlands Antilles',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'NF' => 'Norfolk Island',
            'MP' => 'Northern Mariana Islands',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PW' => 'Palau',
            'PS' => 'Palestinian Territory, Occupied',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar',
            'RE' => 'Reunion',
            'RO' => 'Romania',
            'RU' => 'Russian Federation',
            'RW' => 'Rwanda',
            'BL' => 'Saint Barthelemy',
            'SH' => 'Saint Helena',
            'KN' => 'Saint Kitts And Nevis',
            'LC' => 'Saint Lucia',
            'MF' => 'Saint Martin',
            'PM' => 'Saint Pierre And Miquelon',
            'VC' => 'Saint Vincent And Grenadines',
            'WS' => 'Samoa',
            'SM' => 'San Marino',
            'ST' => 'Sao Tome And Principe',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SK' => 'Slovakia',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'GS' => 'South Georgia And Sandwich Isl.',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard And Jan Mayen',
            'SZ' => 'Swaziland',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syrian Arab Republic',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania',
            'TH' => 'Thailand',
            'TL' => 'Timor-Leste',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad And Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks And Caicos Islands',
            'TV' => 'Tuvalu',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'UK',
            'US' => 'USA',
            'UM' => 'United States Outlying Islands',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Viet Nam',
            'VG' => 'Virgin Islands, British',
            'VI' => 'Virgin Islands, U.S.',
            'WF' => 'Wallis And Futuna',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe',
        );
        foreach($countries as $code => $name){
            if ($name == $country)
                return strtolower($code);
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <title>Covid poster</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">
    <style>
        .card{
            background: url("https://zdnet3.cbsistatic.com/hub/i/r/2020/03/17/0ca4097f-c228-4933-8722-bb131d427be7/resize/1200x900/eb74772d5d0699155dbdffdb8c67e0fe/istock-1209822051.jpg");
            background-size:cover;
            width:1200px;
            height:950px;
            color:#fff;
        }
        .header{
            background: rgba(250,20,110,0.5);
            border-bottom: 4px solid rgba(200,10,50,0.7);
            text-transform:uppercase;
        }
        .details{
            background: rgba(0,0,0,0.7);

        }
        .logo-link{
            letter-spacing: 5px;
        }

    </style>
</head>
<body>




    @foreach($results as $result)

        <?php
            //Max case today country
        if (intval(substr($result->cases->new, 1)) > $max_case_today && $result->country != 'All'){
            $max_case_today_country = $result;
            $max_case_today_country_code = getCode($result->country);
        }
            //Max death today country
        if (intval(substr($result->deaths->new, 1)) > $max_death_today && $result->country != 'All'){
            $max_death_today = intval(substr($result->deaths->new, 1));
            $max_death_today_country = $result->country;
            $max_death_today_country_code = getCode($result->country);
        }
            //Max Case Total
        if ($result->cases->total > $max_case_total && $result->country != 'All'){
            $max_case_total = $result->cases->total;
            $max_case_total_country = $result->country;
            $max_case_total_country_code = getCode($result->country);
        }
            //Max Death total
        if ($result->deaths->total > $max_death_total && $result->country != 'All'){
            $max_death_total = $result->deaths->total;
            $max_death_total_country = $result->country;
            $max_death_total_country_code = getCode($result->country);

        }

        if($result->country == 'All'){
            $world = $result;
        }
        if($result->country == 'Bangladesh'){
            $bd = $result;
        }
        ?>

    @endforeach

{{--    <h2>Max Case Today:</h2>--}}
{{--    <p>{{$max_case_today_country}}: {{$max_case_today}}</p>--}}

{{--    <h2>Max Death Today:</h2>--}}
{{--    <p>{{$max_death_today_country}}: {{$max_death_today}}</p>--}}

{{--    <h2>Max Case Total:</h2>--}}
{{--    <p>{{$max_case_total_country}}: {{$max_case_total}}</p>--}}

{{--    <h2>Max Death Total:</h2>--}}
{{--    <p>{{$max_death_total_country}}: {{$max_death_total}}</p>--}}
{{--    <h2>Worldwide</h2>--}}
{{--    <p>New case:{{$world->cases->new}}, Total Case:{{$world->cases->total}}, New Death:{{$world->deaths->new}}, Total Death:{{$world->deaths->total}}</p>--}}
    <div class="card rounded-lg overflow-hidden">
        <div class=" header text-center p-3">
            <h1 class="font-bold text-4xl">Covid-19 Update</h1>
            <p class="text-xl font-mono">{{date("D, d F Y")}} | as of {{date("h:i A")}}</p>
        </div>
        <div class="details min-h-full">
            <div class="container mx-auto p-4">
                <!--Start World Data-->
                <div class="grid grid-cols-4 gap-6 mx-auto text-gray-800">
                    <div class="col-auto text-center rounded-lg overflow-hidden">
                        <h1 class="text-2xl font-bold border-b py-2 bg-white">{{number_format($world->cases->new)}}</h1>
                        <p class="py-3 bg-gray-100">নতুন আক্রান্ত</p>
                    </div>
                    <div class="col-auto text-center rounded-lg overflow-hidden">
                        <h1 class="text-2xl font-bold border-b py-2 bg-white">{{number_format($world->deaths->new)}}</h1>
                        <p class="py-3 bg-gray-100">নতুন মৃত</p>
                    </div>
                    <div class="col-auto text-center rounded-lg overflow-hidden">
                        <h1 class="text-2xl font-bold border-b py-2 bg-white">{{number_format($world->cases->total)}}</h1>
                        <p class="py-3 bg-gray-100">মোট আক্রান্ত</p>
                    </div>
                    <div class="col-auto text-center rounded-lg overflow-hidden">
                        <h1 class="text-2xl font-bold border-b py-2 bg-white">{{number_format($world->deaths->total)}}</h1>
                        <p class="py-3 bg-gray-100">মোট মৃত</p>
                    </div>
                </div> <!-- END WORLD DATA -->
                <!--Table started-->
                <div class="my-5 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-bold text-gray-800 uppercase tracking-wider">
                                    দেশ
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-bold text-gray-800 uppercase tracking-wider">
                                    নতুন আক্রান্ত
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-bold text-gray-800 uppercase tracking-wider">
                                    নতুন মৃত
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-bold text-gray-800 uppercase tracking-wider">
                                    মোট আক্রান্ত
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-bold text-gray-800 uppercase tracking-wider">
                                    মোট মৃত
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            {{-- Bangladesh Statistics--}}
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img src="https://lipis.github.io/flag-icon-css/flags/4x3/bd.svg" alt="" class="h-10 w-10 rounded-full object-cover">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm leading-5 font-medium text-gray-900">{{$bd->country}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg font-bold leading-5 text-gray-800">
                                    {{number_format($bd->cases->new)}}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg font-bold leading-5 text-gray-800">
                                    {{number_format($bd->deaths->new)}}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg font-bold leading-5 text-gray-800">
                                    {{number_format($bd->cases->total)}}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg font-bold leading-5 text-gray-800">
                                    {{number_format($bd->deaths->total)}}
                                </td>
                            </tr> {{--BD statistics ends--}}
                            @foreach($results as $result)
                                @if($i>=5)
                                    <?php break; ?>
                                @else

                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img src="https://lipis.github.io/flag-icon-css/flags/4x3/{{getCode($result->country)}}.svg" alt="" class="h-10 w-10 rounded-full object-cover">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">{{$result->country}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg font-bold leading-5 text-gray-800">
                                            {{number_format($result->cases->new)}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg font-bold leading-5 text-gray-800">
                                            {{number_format($result->deaths->new)}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg font-bold leading-5 text-gray-800">
                                            {{number_format($result->cases->total)}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg font-bold leading-5 text-gray-800">
                                            {{number_format($result->deaths->total)}}
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endif
                            @endforeach
{{--                            <tr>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
{{--                                    <div class="flex items-center">--}}
{{--                                        <div class="flex-shrink-0 h-10 w-10">--}}
{{--                                            <img src="https://lipis.github.io/flag-icon-css/flags/4x3/it.svg" alt="" class="h-10 w-10 rounded-full object-cover">--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <div class="text-sm leading-5 font-medium text-gray-900">Italy</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
{{--                                    <div class="flex items-center">--}}
{{--                                        <div class="flex-shrink-0 h-10 w-10">--}}
{{--                                            <img src="https://lipis.github.io/flag-icon-css/flags/4x3/gr.svg" alt="" class="h-10 w-10 rounded-full object-cover">--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <div class="text-sm leading-5 font-medium text-gray-900">Greece</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
{{--                                    <div class="flex items-center">--}}
{{--                                        <div class="flex-shrink-0 h-10 w-10">--}}
{{--                                            <img src="https://lipis.github.io/flag-icon-css/flags/4x3/bl.svg" alt="" class="h-10 w-10 rounded-full object-cover">--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <div class="text-sm leading-5 font-medium text-gray-900">Belgium</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
{{--                                    <div class="flex items-center">--}}
{{--                                        <div class="flex-shrink-0 h-10 w-10">--}}
{{--                                            <img src="https://lipis.github.io/flag-icon-css/flags/4x3/in.svg" alt="" class="h-10 w-10 rounded-full object-cover">--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <div class="text-sm leading-5 font-medium text-gray-900">India</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
{{--                                    <div class="flex items-center">--}}
{{--                                        <div class="flex-shrink-0 h-10 w-10">--}}
{{--                                            <img src="https://lipis.github.io/flag-icon-css/flags/4x3/bd.svg" alt="" class="h-10 w-10 rounded-full object-cover">--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <div class="text-sm leading-5 font-medium text-gray-900">Bangladesh</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-lg text-bold leading-5 text-gray-800">--}}
{{--                                    2089--}}
{{--                                </td>--}}
{{--                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div><!--Table END-->

                <!--Start awareness-->
                <div class="grid grid-cols-4 mx-auto gap-2 my-5">
                    <div class="col-auto flex item-center">
                        <div class="flex-shrink-0 h-30 w-30 ">
                            <img src="http://app.sheideal.com/css/wash_hands.png" alt="" class="rounded-lg h-20 w-20 bg-gray-100 p-2">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm leading-5 font-medium">ঘন ঘন হাত পরিষ্কার করুন। অন্তত ২০ সেকেন্ড সাবান বা হ্যান্ড ওয়াশ ব্যাবহার করুন</div>
                        </div>
                    </div>
                    <div class="col-auto flex item-center">
                        <div class="flex-shrink-0 h-30 w-30 ">
                            <img src="http://app.sheideal.com/css/cough_tissue.png" alt="" class="rounded-lg h-20 w-20 bg-gray-100 p-2">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm leading-5 font-medium">হাঁচি কাশির সময় টিস্যু ব্যাবহার করুন অথবা হাতের ভাজে হাঁচি-কাশি দিন</div>
                        </div>
                    </div>
                    <div class="col-auto flex item-center">
                        <div class="flex-shrink-0 h-30 w-30 ">
                            <img src="http://app.sheideal.com/css/stay_home.png" alt="" class="rounded-lg h-20 w-20 bg-gray-100 p-2">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm leading-5 font-medium">খুব প্রয়োজন ছাড়া বাইরে বের হওয়া থেকে বিরত থাকুন। বের হলে মাস্ক ব্যাবহার করুন</div>
                        </div>
                    </div>
                    <div class="col-auto flex item-center">
                        <div class="flex-shrink-0 h-30 w-30 ">
                            <img src="http://app.sheideal.com/css/keep_distance.png" alt="" class="rounded-lg h-20 w-20 bg-gray-100 p-2">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm leading-5 font-medium">সামাজিক দুরুত্ত বজায় রাখুন। একে অপরের অন্তত ২ মিটার বা ৬ ফিট দুরুত্ত বজায় রাখুন</div>
                        </div>
                    </div>
                </div><!--End Awareness-->
            </div>

            <div class="footer m-1 pl-10 pr-10 flex">
                <div class="">
                    <img src="http://app.sheideal.com/css/SheiDeal-logo-lg.png" width="150px" alt="">
                    <p class="text-center logo-link">sheideal.com</p>
                </div>

                <p class="my-auto text-right italic flex-auto">Source: WHO, Johns Hopkins CSSE, Kaggle, rapidapi, worldometer.info</p>
            </div>


        </div>
    </div>


</body>
</html>
