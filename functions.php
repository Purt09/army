<?php

/**
 * Сортировка массива
 */
function sortPlus($key)
{
    return function($a, $b) use ($key){
        return $a[$key] > $b[$key] ? 1 : -1;
    };
}
function randomString($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $randstring = '';
    for ($i = 0; $i < $length; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}

