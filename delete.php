<?php
$id=$_GET['id'];
include('conn.php');
$query=mysqli_query($conn,"delete from `user` where userid='$id'");
header('location:index.php');
?>