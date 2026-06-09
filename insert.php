<?php
include("php/db_connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$course=$_POST['course'];
$mobile=$_POST['mobile'];
$sql="INSERT INTO students(name,email,course,mobile)
VALUES('$name','$email','$course','$mobile')";
mysqli_query($conn,$sql);
echo "Student Added Successfully";
?>