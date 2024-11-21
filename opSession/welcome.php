<?php
session_start();
if(!(isset($_SESSION['username']))){
    $_SESSION['message'] = "Please Sign in!";
    header("Location: signin.php"); 
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <h1 style="color:green; text-align:center; font:bold;">
        Congratulations! You Are Logged in.
    </h1>

    <a href="__logout.php" style="background-color:coral;padding:10px;padding-top:2px;padding-bottom:2px; text-decoration:none; color:white; font:bold;">Log Out</a> 
</body>
</html>