<?php 
class Register{

    public function UserRegister($data){
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $con_password = $data['con_password'];

        $Db= new Database();
        $cheakMail = "SELECT * FROM admin WHERE email = '$email' ";
        $runMail = $Db->ResultQuery($cheakMail);
        $count_mail = $runMail->num_rows;
        if ($count_mail==1) {
            return "<strong class='text-danger'>Email address already exist!</strong>";
        }
        if(empty($username) || empty($email) || empty($password) || empty($con_password) ){
            return "<strong class='text-danger'>All field are required!</strong>";
        }
        elseif (strlen($username) <3 ) {
            return "<strong class='text-danger'>Short Username!</strong>";
        }
        elseif(!preg_match('/^[a-zA-Z0-9 ]*$/',$username)){
            return "<strong class='text-danger'>Invalid Username!</strong>";
        }
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return "<strong class='text-danger'>Invalid Email!</strong>";
        }
        elseif(strlen($password) < 6){
            return "<strong class='text-danger'>Password at least 6 characters!</strong>";
        }
        elseif($password != $con_password){
            return "<strong class='text-danger'>Both password not matched!</strong>";
        }
        else{
            $Db = new Database();
            $encPwd = md5(sha1($password));
            $insert = "INSERT INTO admin(username,email,pwd) VALUES ('$username','$email','$encPwd' ) ";
            $result = $Db->ResultQuery($insert);
            return "<strong class='text-success'>Register success!</strong>";
        }
    }    
}