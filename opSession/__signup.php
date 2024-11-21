<?php
require_once "__dbcon.php";

class SignUP
{
    private $encPass;
    private $is_matched = false;

    private $username;
    private $email;
    private $password;
    private $conpass;


    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->username = htmlspecialchars($_POST['username']);
            $this->email    = htmlspecialchars($_POST['email']);
            $this->password = htmlspecialchars($_POST['password']);
            $this->conpass  = htmlspecialchars($_POST['conpass']);
        }
    }

    public function hashed()
    {
        if ($this->password === $this->conpass) {
            $this->encPass    = password_hash($this->password, PASSWORD_DEFAULT);
            $this->is_matched = true;
        }
    }

    public function store()
    {
        if ($this->username && $this->password && $this->email) {
            $this->hashed();

            if ($this->is_matched) {
                $sql    = "INSERT INTO  user (username, email, password) VALUES('$this->username','$this->email','$this->encPass')";
                $dbconn = new DbCon();
                if ($dbconn) {
                    $result = $dbconn->query($sql);
                    if ($result) {
                        echo "Successfully Inserted Data!";
                        $dbconn->close();
                        header("Location:index.php?message=Created account succesfully!");
                        exit;
                    } else echo "Something went wrong" . $dbconn->error;
                } else {
                    echo "Can't connect to the DB" . $dbconn->error();
                }
            } else {
                echo "Password Doesnot Match";
                header("Location:signup.php?message=Password Does not Match!");
                exit;
            }
        }
    }
}

$signup = new SignUP();
$signup->store();
