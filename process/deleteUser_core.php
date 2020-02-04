<?php
include "../classes/Users.class.php";
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $delete = Users::DeleteUser($id);

    if ($delete==true) {
        header("location: ../all_user.php?success");
    }
    else{
        header("location: ../all_user.php?failed");
    }

}