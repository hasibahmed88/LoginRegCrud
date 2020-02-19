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
$view_student = $student->viewStudent();
if (isset($_REQUEST['add_student_btn'])) {
    $add_student = $student->addStudent();
}
// delete data
if (isset($_REQUEST['delete'])) {
    $deleteStudent = $student->deleteStudent();
}
?>
<h3 class="text-center mt-5"></h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-3">
                            <h5 class="p-0 m-0">Students</h5>
                        </div>
                        <div class="col-12 col-md-2">
                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm">Add user</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
        <?php
            if (isset($add_student)) {
                echo "<h6 class='text-center text-success'>$add_student</h6>";
            }
        ?>
                <table class="table table-striped table-hover border">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                <?php
                    while ($data = mysqli_fetch_assoc($view_student)) {
                    ?>
                        <tr>
                            <td><?php echo $data['id'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['roll'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><?php echo $data['phone'] ?></td>
                            <td>
                                <a href="edit_student.php?userid=<?php echo $data['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                                <a href="?delete=true&deleteId=<?php echo $data['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php }
                ?>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- add student modal -->
<form action="" method="POST">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control from-control-sm">
        </div>
        <div class="form-group">
            <label for="roll">Roll</label>
            <input type="number" name="roll" id="roll" class="form-control from-control-sm">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control from-control-sm">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" name="phone" id="phone" class="form-control from-control-sm">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <input type="submit" name="add_student_btn" class="btn btn-success btn-sm">
      </div>
    </div>
  </div>
</div>
</form>

<?php
    include "footer.php";
?>