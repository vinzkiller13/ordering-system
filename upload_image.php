<?php

include 'ordering_systemData/connect.php';
$msg = '';
if(isset($_POST['upload'])){
  $target =  "images/" .basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $query = "INSERT INTO tbl_image(receipt) VALUES('$image')";
    $result = mysqli_query($conn, $query);
    if(move_uploaded_file($_FILES['receipt']['tmp_name'], $target)){
      $msg =  "Uploaded";
    }
    else {
      $msg = "Failed";
    }
}
?>
