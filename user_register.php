<?php
session_start();
if (isset($_SESSION['name'])) {
    header("location: dashboard.php");
}
use App\classes\Admin;
include "header.php";
?>
<?php
$admin = new Admin();
$register = '';
if (isset($_REQUEST['reg_btn'])) {
    $register = $admin->adminRegister();
}
?>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col-6"><h5>Register here</h5></div>
                        <div class="col-2"><a href="index.php" class="btn btn-primary btn-sm">Home</a></div>
                    </div>
                </div>
                <div class="card-body">
                <form action="" method="POST">
                <?php
                    if ($register) {
                        echo "<h6 class='text-center text-danger'>$register</h6>";
                    }
                ?>
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input id="name" name="name" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input id="email" name="email" type="email" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input id="pwd" name="password" type="password" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="con-pwd">Confirm password</label>
                            <input id="con-pwd" name="con_password" type="password" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="reg_btn" value="Register" class="btn btn-success btn-sm">
                        </div>
                        <div class="form-group">
                            <p>Already have an account? &nbsp; <a href="user_login.php" class="text-primary">Login here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "footer.php";
?>
