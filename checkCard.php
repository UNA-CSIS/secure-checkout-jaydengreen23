<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


function checkCard($card) {
    $num =str_split($card);
    $vprefix = $num[0];
    $prefix = intval($num[0] . $num[1]);
    
    if (strlen($card) == 16 && in_array($prefix , range(51, 55))) {
        return "MASTERCARD";
    } elseif ((strlen($card) == 13 || strlen($card) == 16) && ($vprefix) == 4) {
        return "VISA";
    } elseif (strlen($card) == 15 && ($prefix == 34 || $prefix == 37)) {
        return "AMEX";
    } else {
        return "INVALID";
    }
}