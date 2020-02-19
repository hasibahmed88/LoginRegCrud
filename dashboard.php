<?php
session_start();
if ($_SESSION['name'] == null) {
    header("location: index.php");
}
use App\classes\Database;
include "header.php";
$db = new Database();
?>

<h3 class="text-center mt-5">Welcome <?php echo $_SESSION['name'] ?> </h3>

<?php
    include "footer.php";
?>