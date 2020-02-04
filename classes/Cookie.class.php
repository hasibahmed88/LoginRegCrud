<?php

class Cookie{

    public function SetCookie($userdata){
        $username = $userdata['username'];
        $setcookie = setcookie("USSD",$username,time()+86400*365,'/');
        return $setcookie;
    }

    public function RemoveCookie($userdata){
        $username = $userdata['username'];
        $removeCookie = setcookie("USSD",$username,time()-86400*365,'/');
        return $removeCookie;
    }

    public function ActiveUser(){
        if (isset($_COOKIE['USSD'])) {
            header("location: home.php");
            return true;
        }
    }
    
    public function DeactiveUser(){
        if (!isset($_COOKIE['USSD'])) {
            header("location: index.php");
            return true;
        }
    }

}