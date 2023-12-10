<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student User Settings</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/user.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/products.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <div class="container">
    <h1>Receipt Upload</h1>
    <?php include 'upload_image.php'; ?>
    <form id="uploadForm" method="post" enctype="multipart/form-data">
      <input type="file" name="image" id="file-input"accept="image/*" hidden>
      <label for="file-input"><i class="fa-solid fa-circle-arrow-up"></i></label>
      <button type="submit" name="upload" id="uploadButton" class="btn btn-success">Upload</button>
    </form>
  </div>
  <?php include 'footer.php'; ?>
  <script src="js/side.js"></script>
  <script src="js/student_user.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
