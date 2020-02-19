<?php
namespace App\classes;

class Cookie{

    public function setCookie($name){
        setcookie("USSD",$name,time()+86400*356,'/');
        header("location: dashboard.php");
    }

    public function removeCookie($name){
        setcookie("USSD",$name,time()-86400*356,'/');
        header("location: index.php");
    }

}