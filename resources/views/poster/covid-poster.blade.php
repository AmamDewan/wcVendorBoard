<?php

    $max_case_today = 0;
    $max_death_today = 0;
    $max_case_total = 0;
    $max_death_total = 0;


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
            'GB' => 'United Kingdom',
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
            //Max case today
        if (intval(substr($result->cases->new, 1)) > $max_case_today && $result->country != 'All'){
            $max_case_today = intval(substr($result->cases->new, 1));
            $max_case_today_country = $result->country;
            $max_case_today_country_code = getCode($result->country);
        }
            //Max death today
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
            <div class="grid grid-cols-2 gap-10 p-8 text-center">
                <div class="pl-5 pr-5">
                    <h2 class="title text-2xl font-bold mb-4">
                        Highest Cases Today
                    </h2>
                    <div class="flex m-4">
                        <div class=" flex-initial flag  bg-white rounded-lg overflow-hidden p-3 text-black ml-2">
{{--                            <span width="150px" height="100px" class="flag-icon flag-icon-"></span>--}}
                            <img width="150px" src="https://lipis.github.io/flag-icon-css/flags/4x3/{{$max_case_today_country_code}}.svg" alt="Belgium Flag">
                            <p class="text-2xl pt-2">{{$max_case_today_country}}</p>
                        </div>

                        <div class="flex-auto my-auto">
                            <p class="text-5xl font-bold ">{{number_format($max_case_today)}}</p>
                        </div>
                    </div>
                    <h2 class="title text-2xl font-bold mb-4 mt-10">
                        Highest Cases Total
                    </h2>
                    <div class="flex m-4">
                        <div class=" flex-initial flag  bg-white rounded-lg overflow-hidden p-3 text-black ml-2">
                            <img width="150px" src="https://lipis.github.io/flag-icon-css/flags/4x3/{{$max_case_total_country_code}}.svg" alt="Belgium Flag">
                            <p class="text-2xl pt-2">{{$max_case_total_country}}</p>
                        </div>

                        <div class="flex-auto my-auto">
                            <p class="text-5xl font-bold ">{{number_format($max_case_total)}}</p>
                        </div>
                    </div>

                </div> <!--End cases-->
                <div class="pl-5 pr-5">
                    <h2 class="title text-2xl font-bold mb-4">
                        Highest Death Today
                    </h2>
                    <div class="flex m-4">
                        <div class=" flex-initial flag  bg-white rounded-lg overflow-hidden p-3 text-black ml-2">
                            <img width="150px" src="https://lipis.github.io/flag-icon-css/flags/4x3/{{$max_death_today_country_code}}.svg" alt="Belgium Flag">
                            <p class="text-2xl pt-2">{{$max_death_today_country}}</p>
                        </div>

                        <div class="flex-auto my-auto">
                            <p class="text-5xl font-bold ">{{number_format($max_death_today)}}</p>
                        </div>
                    </div>
                    <h2 class="title text-2xl font-bold mb-4 mt-10">
                        Highest Death Total
                    </h2>
                    <div class="flex m-4">
                        <div class=" flex-initial flag  bg-white rounded-lg overflow-hidden p-3 text-black ml-2">
                            <img width="150px" src="https://lipis.github.io/flag-icon-css/flags/4x3/{{$max_death_total_country_code}}.svg" alt="Belgium Flag">
                            <p class="text-2xl pt-2">{{$max_death_total_country}}</p>
                        </div>

                        <div class="flex-auto my-auto">
                            <p class="text-5xl font-bold ">{{number_format($max_death_total)}}</p>
                        </div>
                    </div>

                </div><!--End death-->
            </div>
            <div class="world">
                <h2 class="text-4xl text-center">Worldwide Today</h2>
                <p class="text-xl text-center mt-2">New case: <span class="text-orange-400 font-bold">{{number_format($world->cases->new)}}</span>;   Total Case: <span class="text-orange-400 font-bold">{{number_format($world->cases->total)}}</span>;   New Death: <span class="text-orange-400 font-bold">{{number_format($world->deaths->new)}}</span>;   Total Death: <span class="text-orange-400 font-bold">{{number_format($world->deaths->total)}}</span></p>
            </div>

            <div class="footer m-3 pt-10 pl-10 pr-10 flex">
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
