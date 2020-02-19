<?php
namespace App\classes;

class Admin{

    public function adminRegister(){
        extract($_REQUEST);
        // name , email , password , con_password'
        $DB = new Database();
        $checkMail = "SELECT * FROM admin WHERE email = '$email' ";
        $runMail = mysqli_query($DB->con,$checkMail);
        $count_mail = $runMail->num_rows;
        if ($count_mail==1) {
            $message = "Email already used!";
            return $message;
        }
        elseif (strlen($name) < 3) {
            $message = "Short username!";
            return $message;
        }
        elseif(!preg_match('/^[a-zA-Z0-9 ]*$/',$name)){
            $message = "Invalid username!";
            return $message;
        }
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $message = "Invalid email!";
            return $message;
        }
        elseif(strlen($password) < 6){
            $message = "Password at least 6 characters!";
            return $message;
        }
        elseif($password != $con_password){
            $message = "Both password not matched!";
            return $message;
        }
        
        else{
            $encPwd = md5(sha1($password));
            $insert = "INSERT INTO admin(name,email,password) VALUES ('$name','$email','$encPwd') ";
            if ($insert = mysqli_query($DB->con,$insert)) {
                $message = "Register success!";
                return $message;
            }
            else{
                $message = "Register failed!";
                return $message;
            }
        }
    } // admin register

// Admin Login
    public function adminLogin(){
        extract($_REQUEST);
        $DB = new Database();
        $encPwd = md5(sha1($password));
        $login = "SELECT * FROM admin WHERE email='$email' && password='$encPwd' ";
        if ($login = mysqli_query($DB->con, $login)) {
            $user = mysqli_fetch_assoc($login);
            if ($user) {
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $cookie = new Cookie();
                $setCookie = $cookie->setCookie($user['name']);
                header("location: dashboard.php");
            }
        }
    }
// Admin logout
    public function adminLogout($name){
        session_start();
        session_destroy();
        setcookie("USSD",$name,time()-86400*365,'/');
        header("location: index.php");
    }




}

