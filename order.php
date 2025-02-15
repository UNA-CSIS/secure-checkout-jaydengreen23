<?php
session_start();

$num_poster= $_POST["posters"];
$num_controls= $_POST["controls"];
$num_sticks = $_POST["sticks"];

$p = $num_poster * 10;
$s = $num_sticks * 5;
$c = $num_controls * 50;
$subtotal = $c + $p + $s;
$_SESSION['subtotal'] = $subtotal;
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
        <h1>Order Summary</h1><br>
        <p>Subtotal: $<?php echo $subtotal ?></p>
        <form action="tax.php" method="post">
            <input type="submit" value="Confirm">
        </form>
    </body>
</html>
