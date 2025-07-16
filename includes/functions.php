<?php

function dd(...$vars) {
    echo '<pre>';
    foreach ($vars as $var) {
        var_dump($var);
    }
    echo '</pre>';
    die();
}

function truncate($string, $maxLength = 50) {
    if (strlen($string) > $maxLength) {
        return substr($string, 0, $maxLength) . ' ...';
    }
    return $string;
}