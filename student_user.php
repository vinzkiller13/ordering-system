<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student User Settings</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/_user.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/products.css">
</head>
<body>
<?php
include 'ordering_systemData/config.php';

$message = array();

if (isset($_POST['upload'])) {
    $target = "C:/xampp/htdocs/ordering-system/images/" . basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $query = "INSERT INTO tbl_image(receipt) VALUES('$image')";
    $result = mysqli_query($conn, $query);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $message[] = 'Uploaded';
    } else {
        $message[] = 'Failed';
    }
}

if (!empty($message)) {
    foreach ($message as $msg) {
        echo '<div class="message"><span>' . $msg . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
    }
}
?>

  <?php include 'header.php'; ?>
  <div class="container">
    <h1>Receipt Upload</h1>
    
    <form id="uploadForm" method="post" enctype="multipart/form-data">
      <input type="file" name="image" id="file-input"accept="image/*" hidden>
      <label for="file-input"><i class="fa-solid fa-circle-arrow-up"></i></label>
      <button type="submit" name="upload" id="uploadButton" class="btn btn-success">Upload</button>
    </form>
    <span id="file-name-display" class="file-name-display"></span>
    
  </div>
  <?php include 'footer.php'; ?>
  <script src="js/side.js"></script>
  <script src="js/upload.js"></script>
  <script src="js/student_user.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
