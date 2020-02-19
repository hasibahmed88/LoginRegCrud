<?php
session_start();
if ($_SESSION['name'] == null) {
    header("location: index.php");
}
use App\classes\Student;
include "header.php";
?>
<?php 
$student = new Student();
$viewStudent = $student->viewStudentById($_REQUEST['userid']);
$studentInfo = mysqli_fetch_assoc($viewStudent);
// update student
if (isset($_REQUEST['update_btn'])) {
    $updateStudent = $student->updateStudent();
}
?>
<h1> &nbsp;</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col-12 col-md-3">
                    <h5 class="p-0 m-0">Edit student</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-sm" value="<?php echo $studentInfo['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="roll">Roll</label>
                    <input type="number" name="roll" id="roll" class="form-control form-control-sm" value="<?php echo $studentInfo['roll'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm" value="<?php echo $studentInfo['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" id="phone" class="form-control form-control-sm" value="<?php echo $studentInfo['phone'] ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="update_id" value="<?php echo $studentInfo['id'] ?>">
                    <input type="submit" name="update_btn" class="btn btn-success btn-sm" value="Update">
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