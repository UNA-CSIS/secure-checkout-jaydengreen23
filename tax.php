<?php
session_start();
$subtotal = $_SESSION['subtotal'];
$tax = ($subtotal * .095);
$total = $subtotal + $tax;
$_SESSION['total'] = round($total, 2);
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
        <h1>Checkout</h1>
        <p>Subtotal: $<?php echo $subtotal; ?><br>
            Tax: $<?php echo round($tax, 2); ?><br>
            Total: $<?php echo $total; ?><br>
        </p>
        <a href="login.php">
        <button>Checkout</button>
        </a><br>
    <a href="index.php">
        <button>Continue Shopping</button>
    </a>
    </body>
</html>
