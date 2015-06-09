<?php

// locale: lithuanian (lt-lt)
// author: d4mn https://github.com/d4mn

return array(
    "months"        => explode('_', 'Sausis_Vasaris_Kovas_Balandis_Gegužė_Birželis_Liepa_Rugpjūtis_Rugsėjis_Spalis_Lapkritis_Gruodis'),
    "monthsShort"   => explode('_', 'Sau_Vas_Kov_Bal_Geg_Bir_Lie_Rugp_Rugs_Spa_Lap_Gru'),
    "weekdays"      => explode('_', 'Pirmadienis_Antradienis_Trečiadienis_Ketvirtadienis_Penktadienis_Šeštadienis_Sekmadienis'),
    "weekdaysShort" => explode('_', 'Pir_Ant_Tre_Ket_Pen_Šeš_Sek'),
    "calendar"      => array(
        "sameDay"  => '[Šiandien]',
        "nextDay"  => '[Rytoj]',
        "lastDay"  => '[Vakar]',
        "lastWeek" => '[Praeitą] l',
        "sameElse" => 'l',
        "withTime" => '[at] H:i',
        "default"  => 'd-m-Y',
    ),
    "relativeTime"  => array(
        "future" => 'už %s',
        "past"   => 'prieš %s',
        "s"      => 'prieš kelias sek.',
        "m"      => 'minutė',
        "mm"     => '%d minutės',
        "h"      => 'valanda',
        "hh"     => '%d valandos',
        "d"      => 'diena',
        "dd"     => '%d dienos',
        "M"      => 'mėnesis',
        "MM"     => '%d mėnesiai',
        "y"      => 'metai',
        "yy"     => '%d metus',
    ),
    "ordinal"       => function ($number)
    {
        $n = $number % 100;
        $ends = array('th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th');

        if ($n >= 11 && $n <= 13)
        {
            return $number . '[th]';
        }

        return $number . '[' . $ends[$number % 10] . ']';
    },
    "week"          => array(
        "dow" => 1, // Monday is the first day of the week.
        "doy" => 4  // The week that contains Jan 4th is the first week of the year.
    ),
);
