<?php
if (!defined('SHOW_PAGE') || SHOW_PAGE !== true){
    header('Location: '.'/');
}

/**
 * Очищает строку от всех символов кроме ведущего плюса и цифр.
 * @param string $string
 * @return string
 */
function clearPhone($string){
    $result = '';
    if(!is_array($string) && !is_object($string)){
        $result = preg_replace('/[^\+0-9+]/', '', $string);
    }
    return $result;
}
/**
 * Очищает строку от всех символов кроме ведущего плюса и цифр.
 * @param string $string
 * @return bollean
 */
function checkPhone($phone){
    $lenPhone = strlen($phone);
    return ($lenPhone > 5 && $lenPhone < 16);
}