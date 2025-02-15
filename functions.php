<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function test($name,$card,$exp,$sec){
    $n = test_input($name);
    $c = test_input($card);
    $e = test_input($exp);
    $s = test_input($sec);
    $_SESSION["name"] = $n;
    $_SESSION["cardNum"] = $c;
    header("Location: paid.php");
}

function login($user, $pass) {

    if ($user == $pass) {
        header("Location: checkout.php");
    } else {
        header("Location: index.php");
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
