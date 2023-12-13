<?php
include('conn.php');
$id=$_GET['id'];

$student_name=$_POST['student_name'];
$course=$_POST['course'];
$password=$_POST['password'];

mysqli_query($conn,"update `user` set student_name='$student_name', course='$course', password='$password' where userid='$id'");
header('location:index.php');
?>