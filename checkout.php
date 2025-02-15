<?php
session_start();
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
        <h1>Checkout</h1><br>
        <p>Amount to charge: $<?= $_SESSION['total'] ?><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name on Card: <input type="text" name="name" required><br>
            Card Number: <input type="text" name="cardNum" required><br>
            Expiration Date[mm/yy]: <input type="text" name="expDate" required><br>
            Security Code: <input type="text" name="security" required><br>
            <?php
            require 'functions.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                test($_POST["name"], $_POST["cardNum"], $_POST["expDate"], $_POST["security"]);
            }
            ?>
            <input type ="submit">
        </form>


    </body>
</html>
