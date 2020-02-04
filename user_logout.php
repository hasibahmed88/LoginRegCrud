<?php
include "classes/Cookie.class.php";

if (isset($_COOKIE['USSD'])) {
    $username = $_COOKIE['USSD'];
    $removeCookie = Cookie::RemoveCookie($username);
    header("location: index.php");
    exit();
}

