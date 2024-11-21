<?php
    session_start();
    unset($_SESSION['username']);
    $_SESSION['message'] = "Login with Proper credentials";
    header("Location: signin.php");
    exit;