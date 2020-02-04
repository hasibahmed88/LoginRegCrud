<?php
    include "header.php";
    include "classes/Database.class.php";
    $access = Cookie::ActiveUser();
?>

<?php

    $db = new Database();

?>

<div class="container p-4">
    <h2 class="text-center mt-5">Hi there!</h2>
</div>



<div style="height:500px"></div>


<?php
    include "footer.php";
?>