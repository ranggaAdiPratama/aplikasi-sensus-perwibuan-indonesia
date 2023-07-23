<?php

use Illuminate\Support\Facades\Auth;

function getSeason()
{
    if (date('m') == '01' || date('m') == '02' || date('m') == '03') {
        $season = 'winter';
    } elseif (date('m') == '04' || date('m') == '05' || date('m') == '06') {
        $season = 'spring';
    } elseif (date('m') == '07' || date('m') == '08' || date('m') == '09') {
        $season = 'summer';
    } elseif (date('m') == '10' || date('m') == '11' || date('m') == '12') {
        $season = 'fall';
    }

    return $season;
}
function includeRouteFiles($folder)
{
    $directory = $folder;
    $handle = opendir($directory);
    $directory_list = [$directory];

    while (false !== ($filename = readdir($handle))) {
        if ($filename != '.' && $filename != '..' && is_dir($directory . $filename)) {
            array_push($directory_list, $directory . $filename . '/');
        }
    }

    foreach ($directory_list as $directory) {
        foreach (glob($directory . '*.php') as $filename) {
            require $filename;
        }
    }
}

function warmGreeting()
{
    return 'Selamat datang ' . Auth::user()->name . '! Sudah minum obat skizo hari ini?';
}
