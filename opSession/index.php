<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Management</title>
</head>

<body style="text-align: center;">
    <h1 style="color:red; text-align:center; font:bold;">
        Please Sign in to view Content! You Are not signed in.
    </h1>
    <p>
        <a href="signin.php">Sign in</a>
        <a href="welcome.php" style="margin-left:10px;">Home</a>
    </p>
    <br>
    <p>
        Don't Have an Account? <a href="signup.php">Sign Up</a>
    </p>
    <p style="color: burlywood; font:bold; text-align:center; ">
        <?php
        if (isset($_GET['message'])) {
            echo htmlspecialchars($_GET['message']);
        }
        ?>
    </p>
</body>

</html>