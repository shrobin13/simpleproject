<?php
    
    class DbCon extends mysqli{

         function __construct(private $host="localhost", private $user="root", private $pass="", private $db="session") {
            parent::__construct($host,$user,$pass,$db);
         }
    }