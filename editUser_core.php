<?php
include "classes/Users.class.php";

if (isset($_REQUEST['update_user_btn'])) {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $roll =$_REQUEST['roll'];
    $department = $_REQUEST['department'];
    $userId = $_REQUEST['userid'];

    $update = Users::EditUser($username,$email,$roll,$department,$userId);

    if ($update==true) {
        header("location: all_user.php?dataUpdatadedSuccessfully");
    }
    else{
        header("location: all_user.php?dataUpdatadedFailed");
    }

}


?>