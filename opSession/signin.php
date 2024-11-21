<?php
require_once "__signin.php";
?>
<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <h1     style  = "color:blueviolet; text-align:center; font:bold;"> Sign In</h1>
    <form   action = "__signin.php" method = "post" style           = "text-align: center;">
    <input  type   = "text" name           = "username" placeholder = "Username"><br>
    <input  type   = "password" name       = "password" placeholder = "Password"><br>
    <button type   = "submit"> Sign In</button>
    </form>
    <p style="text-align: center;">
        Don't Have an Account? <a href="signup.php">Sign Up</a>
    </p>
    <p style = "text-align: center; color:gray;">
        <?php
        session_start();
        if (isset($_SESSION['message']) && !(isset($_SESSION['username']))) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
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