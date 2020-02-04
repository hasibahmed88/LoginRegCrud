<?php

spl_autoload_register('myAutoload');

function myAutoload($myClass){
    $path = "classes/";
    $extention = ".class.php";
    $fullPath = $path.$myClass.$extention;

    include $fullPath;
}

