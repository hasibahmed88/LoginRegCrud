<?php
session_start();
if (isset($_SESSION['name'])) {
    header("location: dashboard.php");
}
use App\classes\Database;
include "header.php";
$db = new Database();

?>
<h3 class="text-center mt-5">Index page</h3>

<?php
    include "footer.php";
?>