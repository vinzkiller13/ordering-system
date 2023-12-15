<?php

session_start();
include 'ordering_systemData/connect.php';
include 'session.php';
?>
<?php
    
    include 'ordering_systemData/config.php';
    
    $message = array();

    
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
    if (!empty($message)) {
      foreach ($message as $msg) {
          echo '<div class="message"><span>' . $msg . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      }
  }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Dashboard</title>
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/my_account.css">
</head>
<body>
<?php include 'header.php'; ?>
  <?php 
          
          $username = $_SESSION['username'];
          $select = mysqli_query($conn, "SELECT * FROM student_account WHERE username = '$username'");
          
          if(mysqli_num_rows($select) > 0){
              while($fetch_image = mysqli_fetch_assoc($select)){
  ?>

  <form id="uploadForm" method="post" enctype="multipart/form-data">

    <section>
        <img src="uploaded_img/<?php echo $fetch_image['image']; ?>" height="100" alt="">
        <p>Email: <?php echo "".$_SESSION['username'] ?> </p>
        <input type="file" name="image" id="file-input" accept="image/*" hidden>
        <label for="file-input"><i class="fa-solid fa-circle-arrow-up"></i></label>
        <button type="submit" name="upload" id="uploadButton" class="btn btn-success">Upload</button>
    </section>
  </form>
  <?php
              
      };
      };
    ?>
  <script src="js/script.js"></script>
  <script src="js/my_account.js"></script>
  <?php include 'footer.php' ?>
</body>
</html>