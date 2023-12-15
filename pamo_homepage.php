<?php session_start(); 
$username = $_SESSION['username'];
if($username == true){

}else{
  header('location: login.php');
}
$message[] = 'WELCOME '.$_SESSION['username'];
?>
<?php
if(isset($message)){
  foreach($message as $message){
     echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
  };
};

?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PAMO DASHBOARD</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/homepage.css">

</head>
<body>
  <?php include 'pamo_header.php'; ?>
  
    
  
  <script src="js/script.js"></script>
</body>