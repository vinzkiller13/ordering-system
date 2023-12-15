<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/st.css">
    <title>Document</title>
</head>
<body>
<?php 
  $username = $_SESSION['username'];
  if($username == true){

  }else{
    header('location: login.php');
  }
  ?>
</body>
</html>