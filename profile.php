<?php
session_start();
if ($_SESSION['name'] == null) {
    header("location: index.php");
}
include "header.php";
?>

<h3 class="text-center mt-5">Profile Page</h3>

<?php
    include "footer.php";
?>