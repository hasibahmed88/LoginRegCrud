<?php
session_start();
if (isset($_SESSION['name'])) {
    header("location: dashboard.php");
}
use App\classes\Admin;
include "header.php";
?>
<?php
    $login = new Admin();
    if (isset($_REQUEST['login_btn'])) {
        $adminLogin = $login->adminLogin();
    }
?>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Login here</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" name="password" type="password" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login_btn" value="Login" class="btn btn-success btn-sm">
                            </div>
                            <div class="form-group">
                                <p>Do not have an account? &nbsp; <a href="user_register.php" class="text-primary">Register here</a></p>
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