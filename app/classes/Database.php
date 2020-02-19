<?php
namespace App\classes;
include "include/config.php";
class Database{

    public $con;
    public function __construct(){
        $this->con = mysqli_connect(host,dbuser,dbpwd,dbname);
        if ($this->con->connect_error) {
            die("Error: ".$this->con->connect_error);
        }
        
    }
}