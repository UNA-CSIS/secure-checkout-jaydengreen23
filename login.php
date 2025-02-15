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
        <h2>Please login to continue to checkout.</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
            Username:<input type="text" name="name"><br>
            Password:<input type="text" name="pass">
            <?php
            require 'functions.php';
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                login($_POST["name"], $_POST["pass"]);
            }
            ?>
            <input type ="submit">
        </form>
            </body>
            </html>
