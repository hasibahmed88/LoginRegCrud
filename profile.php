<?php
    include "header.php";
    $access = Cookie::DeactiveUser();
?>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Username: </h4>
                </div>
                <div class="card-body">
                    <h5>Welcome to your profile!</h6>
                </div>
            </div>
        </div>
    </div>
</div>



<div style="height:500px"></div>

<?php
    include "footer.php";
?>
