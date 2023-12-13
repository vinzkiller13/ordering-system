<?php
include('conn.php');

$student_name=$_POST['student_name'];
$course=$_POST['course'];
$password=$_POST['password'];

mysqli_query($conn, "insert into `user` (student_name,course,password) values ('$student_name','$course','$password')");
header('location:index.php');
?>