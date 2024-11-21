<?php

require_once "__dbcon.php";

class SignIn
{
    private $username;
    private $password;

    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->username = htmlspecialchars($_POST['username']);
            $this->password = htmlspecialchars($_POST['password']);
        }
    }

    public function auth()
    {

          // ini_set('display_errors', 1);
          // ini_set('display_startup_errors', 1);
          // error_reporting(E_ALL);


        if ($this->password && $this->username) {
            $sql    = "SELECT password FROM user WHERE username = '$this->username'";
            $dbcon  = new DbCon();
            $result = $dbcon->query($sql);

            if ($result) {
                $pass = $result->fetch_assoc();
                  // var_dump($pass);
                if (password_verify($this->password, $pass['password'])) {
                    session_start();
                    $_SESSION['username'] = $this->username;
                    $_SESSION['message']  = "Successfully Logged In";
                    header("Location: welcome.php?message=Successfully Logged In!");
                    exit;
                } else {
                    header("Location: signin.php?message=Wrong username or Password!");
                    exit;
                }
            } else {
                header("Location: signin.php?message=Something went wrong!");
                exit;
            }
        }
    }
}

$signin = new SignIn();
$signin->auth();
