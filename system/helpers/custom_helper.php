<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('consoleLog')) {
    function consoleLog($data)
    {
        echo "<script>console.log(" . json_encode($data) . ");</script>";
    }
}

if (!function_exists('dumpLog')) {
    function dumpLog($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
}