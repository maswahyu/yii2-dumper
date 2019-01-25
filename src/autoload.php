<?php

use yii\helpers\VarDumper;

if (!function_exists('d')) {
    function d($data, $depth = 10, $highlight = true)
    {
        echo VarDumper::dump($data, $depth, $highlight) . '<br>';
    }
}

if (!function_exists('dd')) {
    function dd($data, $depth = 10, $highlight = true)
    {
        d($data, $depth = 10, $highlight = true);
        die();
    }
}

if (!function_exists('dump')) {
    function dump($data, $depth = 10, $highlight = true)
    {
        d($data, $depth = 10, $highlight = true);
    }
}