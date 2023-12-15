<?php
    
include 'ordering_systemData/config.php';

if(isset($message)){
  foreach($message as $message){
     echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
  };
};

if(isset($_POST['upload'])){
    $username = $_SESSION['username'];
    $target = "C:/xampp/htdocs/ordering-system/images/" . basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $query = "UPDATE student_account SET image = '$image' WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      
      $message[] = 'Uploaded';
    }
    else {
      $message[] = 'Failed';
    }
}
?>
