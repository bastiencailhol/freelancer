<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('consoleLog')) {
    function consoleLog($varname, $vardata)
    {
        echo "<script>console.log('" . $varname . ":', ";
        if (gettype($vardata) != 'string') {
            echo "'";
        }
        var_export($vardata);
        if (gettype($vardata) != 'string') {
            echo "'";
        }
        echo ")</script>";
    }
}