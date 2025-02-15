<?php
session_start();
$card = $_SESSION["cardNum"];


?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php require 'checkCard.php';
            $vaild = checkCard($card);
            if($vaild == "INVALID"){
                echo "INVALID";
            }else{
                echo "Thank you ". $_SESSION['name']. " for your " . $vaild ." payment. You will charged $". $_SESSION['total'];
            }
        ?>
    </body>
</html>
