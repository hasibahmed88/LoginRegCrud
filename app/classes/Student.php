<?php
namespace App\classes;

class Student{
    
    public function addStudent(){
        extract($_REQUEST);
        // name, roll, email, phone\
        $DB = new Database();
        $insert = "INSERT INTO students(name,roll,email,phone) VALUES ('$name','$roll','$email','$phone') ";
        if ($result = mysqli_query($DB->con,$insert)) {
            $message = "Student added!";
            header("location: view_student.php");
            return $message;
        }
    }
// view student
    public function viewStudent(){
        $DB = new Database();
        $view = "SELECT * FROM students";
        if ($result = mysqli_query($DB->con,$view)) {
            return $result;
        }
    }   
// view student by id
    public function viewStudentById($userId){
        $DB = new Database();
        $viewInfo = "SELECT * FROM students WHERE id='$userId' ";
        if ($result = mysqli_query($DB->con,$viewInfo)) {
            return $result;   
        }
    }
// update student
    public function updateStudent(){
        extract($_REQUEST);
        // name, roll, email, phone, update_id
        $DB = new Database();
        $update = "UPDATE students SET name='$name',roll='$roll',email='$email',phone='$phone' WHERE id='$update_id' ";
        if ($result = mysqli_query($DB->con,$update)) {
            header("location: view_student.php");
        }
    }
// delete student
    public function deleteStudent(){
        extract($_REQUEST);
        $DB = new Database();
        $delete = "DELETE FROM students WHERE id='$deleteId' ";
        if ($delete = mysqli_query($DB->con,$delete)) {
            header("location: view_student.php");
        }
    }


}