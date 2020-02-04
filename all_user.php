<?php
    include "header.php";
    $access = Cookie::DeactiveUser();
?>

<?php
    $user = new Users();
    if (isset($_REQUEST['add_user_btn'])) {
        $add_user = $user->AddUser($_REQUEST);
    }
?>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col-3"><h5>User list</h5></div>
                <div class="col-3 text-right">
                    <a data-toggle="modal" href="#exampleModal" class="btn btn-primary btn-sm">Add User</a>
                </div>
            </div>
        </div>
        <div class="card-body">
    <?php
        if (isset($add_user)) {
            echo $add_user.'<br>';
        }

        if (isset($_REQUEST['userDeleted'])) {
            echo "<strong class='text-danger'>User deleted success!</strong>";
        }
        if (isset($_REQUEST['dataUpdatadedSuccessfully'])) {
            echo "<strong class='text-success'>User Updated!</strong>";
        }
    ?>
    <br>
            <table class="table table-striped border table-hover">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Roll</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
        <?php
            $Db = new Database();
            $viewUser = "SELECT * FROM users";
            $result = $Db->ResultQuery($viewUser);
            $id = 1;
            while($data = $result->fetch_object()){
                $userId = $data->id;
                $username = $data->username;
                $roll = $data->roll;
                $department = $data->department;
                $email = $data->email;
                ?>
                <tr>
                    <td class="p-1"><?php echo $id; $id++ ?></td>
                    <td class="p-1"><?php echo $username ?></td>
                    <td class="p-1"><?php echo $roll ?></td>
                    <td class="p-1"><?php echo $department ?></td>
                    <td class="p-1"><?php echo $email ?></td>
                    <td class="p-1">
                        <a href="edit_user.php?id=<?php echo $userId?>" class="btn btn-primary btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure?')" href="deleteUser.php?id=<?php echo $userId ?> " class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>

            <?php }

        ?>  
            </table>
        </div>
    </div>
</div>

<!-- Add user modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" class="form-control form-control-sm">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" class="form-control form-control-sm">
            </div>
            <div class="form-group">
                <label for="roll">Roll No</label>
                <input id="roll" name="roll" type="number" class="form-control form-control-sm">
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <select name="department" id="department" class="form-control form-control-sm">
                    <option value="">Select</option>
                    <option value="Computer">Computer</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Textile">Textile</option>
                    <option value="Civil">Civil</option>
                    <option value="Marine">Marine</option>
                    <option value="RAC">RAC</option>
                    <option value="GDPM">GDPM</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="add_user_btn" value="Add user" class="btn btn-success btn-sm">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div style="height:500px"></div>

<?php
    include "footer.php";
?>