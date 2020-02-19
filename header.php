<?php
use App\classes\Admin;
include "vendor/autoload.php";
?>
<?php
$admin = new Admin();
if (isset($_REQUEST['logout'])) {
  $logout = $admin->adminLogout($_REQUEST['USSD']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="index.php">Login Register system PHP OOP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
   <ul class="navbar-nav mx-auto">
     <?php 
      if (!isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link text-dark' href='index.php'>Home</a></li>";
      }
      ?>
    <?php
      if (isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link text-dark' href='dashboard.php'>Dashboard</a></li>";
      }
    ?>
    <?php
      if (!isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link text-dark' href='user_login.php'>Login</a></li>";
      }
    ?>
    <?php
      if (!isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link text-dark' href='user_register.php'>Register</a></li>";
      }
      ?>
    <?php
      if (isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link text-dark' href='profile.php'>Profile</a></li>";
      }
    ?>
    <?php
      if (isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link text-dark' href='view_student.php'>Students</a></li>";
      }
    ?>
    <?php
      if (isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link text-dark' href='?logout=true'>Logout</a></li>";
      }
     ?>
   </ul>
  </div>
  </div>
</nav>

