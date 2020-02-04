<?php
include "classes/Users.class.php";
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $delete = Users::DeleteUser($id);

    if ($delete==true) {
        header("location: all_user.php?userDeleted");
        
    }
    else{
        header("location: all_user.php?userdeleteedfailed");
        return "<strong class='text-danger'>User deleted failed!</strong>";
    }

}