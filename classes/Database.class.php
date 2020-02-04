<?php
include "include/config.php";
class Database{

    public $con;
    public function __construct()
    {
        $this->con = new mysqli(host,dbuser,dbpwd,dbname);
        if ($this->con->connect_error) {
            die("Error: ".$this->con->connect_error);
        }
    }

    public function ResultQuery($userData){
        return $this->con->query($userData);
    }
}

