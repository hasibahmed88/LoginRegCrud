<?php
include "header.php";
    $access = Cookie::DeactiveUser();
?>
<?php
    if (isset($_COOKIE["USSD"])) {
        $username = $_COOKIE['USSD'];
    }
?>
<div class="container p-4">
    <h3 class="text-center my-5">Welcome <?php echo $username?> </h3>
</div>


<div style="height:500px"></div>

<?php
include "footer.php";

?>