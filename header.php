<?php
  include "include/autoload.php";
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
    <ul class="navbar-nav ml-auto">

    <?php
      if (isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link' href='home.php'>Home</a></li>";
      }
    ?>
    <?php
      if (isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link' href='user_profile.php'>Profile</a></li>";
      }
    ?>
    <?php
      if (isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link' href='all_user.php'>All User</a></li>";
      }
    ?>
    <?php
      if (isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link' href='user_logout.php'>Logout</a></li>";
      }
    ?>
    <?php
      if (!isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link' href='index.php'>Index</a></li>";
      }
    ?>
    <?php
      if (!isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link' href='user_login.php'>Login</a></li>";
      }
    ?>
    <?php
      if (!isset($_COOKIE['USSD'])) {
        echo "<li class='nav-item'><a class='nav-link' href='user_register.php'>Register</a></li>";
      }
    ?>  
            
    </ul>

  </div>
  </div>
</nav>

