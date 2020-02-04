<?php
include "header.php";
?>

<?php
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $Db = new Database();
        $getData = "SELECT * FROM users WHERE id=$id ";
        $result = $Db->ResultQuery($getData);
        while($data = $result->fetch_object()){
            $userId = $data->id;
            $username = $data->username;
            $email = $data->email;
            $roll = $data->roll;
            
        }
    }
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Edite user</h5>
                </div>
                <div class="card-body">
        
                    <form action="edituser_core.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" class="form-control form-control-sm" value="<?php echo $username?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" class="form-control form-control-sm" value="<?php echo $email?>">
                        </div>
                        <div class="form-group">
                            <label for="roll">Roll No</label>
                            <input id="roll" name="roll" type="number" class="form-control form-control-sm" value="<?php echo $roll?>">
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select name="department" id="department" class="form-control form-control-sm" required>
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
                            <input type="hidden" name="userid" value="<?php echo $userId?>">
                            <input type="submit" name="update_user_btn" value="Update" class="btn btn-success btn-sm">
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
