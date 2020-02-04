<?php
include "Database.class.php";
class Users{

    // add user funciton
    public function AddUser($data){
        $username = $data['username'];
        $email = $data['email'];
        $roll = $data['roll'];
        $department = $data['department'];

        // short user condition
        if(strlen($username) <3 ) {
            return "<strong class='text-danger'>Short Username!</strong>";
        }
        // invalid username condition
        elseif(!preg_match('/^[a-zA-Z0-9 ]*$/',$username)){
            return "<strong class='text-danger'>Invalid Username!</strong>";
        }
        //validate email
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return "<strong class='text-danger'>Invalid email!</strong>";
        }

        // insert user data on database 
        else{
            $Db = new Database(); 
            $insertUser = "INSERT INTO users(username,roll,department,email) VALUES ('$username','$roll','$department','$email')  ";
            $result = $Db->ResultQuery($insertUser);
            if ($result==true) {
                return "<strong class='text-success'>User added success!</strong>";
            }
            else{
                return "<strong class='text-danger'>User added failed!</strong>";
            }
        }
    }

    // delete user function

    public function DeleteUser($userId){
        $Db = new Database();
        
        $delete = "DELETE FROM users WHERE id=$userId ";
        $result = $Db->ResultQuery($delete);
        return true;
    }

    // edit user function 

    public function EditUser($username,$email,$roll,$department,$userId){
        $Db = new Database();
        $update = "UPDATE users SET username='$username', email='$email',roll='$roll',department='$department' WHERE id=$userId  ";
        $result = $Db->ResultQuery($update);
        return true;
    }
}



?>