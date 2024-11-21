<?php
require_once "__signup.php";
?>
<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <h1     style  = "color: blueviolet;font:bold; text-align:center;">Sign Up</h1>
    <form   action = "__signup.php" method = "post" style           = "text-align:center;">
    <input  type   = "text" name           = "username" placeholder = "Username"><br>
    <input  type   = "email" name          = "email" placeholder    = "Email"><br>
    <input  type   = "password" name       = "password" placeholder = "Password"><br>
    <input  type   = "password" name       = "conpass" placeholder  = "Confirm Password"><br>
    <button type   = "submit">Sign Up</button>
    </form>
    <p style="text-align: center;">
        Already Have an account? <a href="signin.php">Sign In</a>
    </p>
    <p style = "color: burlywood; font:bold; text-align:center; ">
        <?php
        if (isset($_GET['message'])) {
            echo htmlspecialchars($_GET['message']);
        }
        ?>
    </p>
</body>


</html>