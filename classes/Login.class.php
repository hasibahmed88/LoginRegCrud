<?php

class Login{

public function UserLogin($data){
    $email = $data['email'];
    $password = $data['password'];

        $Db = new Database();
        $encPwd = md5(sha1($password));
        $login = "SELECT * FROM admin WHERE email='$email' AND pwd='$encPwd' ";
        $result = $Db->ResultQuery($login);
        $userData = mysqli_fetch_array($result);
        $count_data = $result->num_rows;
        
        if ($result==true) {
            if ($count_data==1) {
                $setCookie = Cookie::SetCookie($userData);
                header("location: home.php");
                exit();
            }
            else{
                return "<strong class='text-danger'>Email address or password incorrect!</strong>";
            }
        }
    }

}