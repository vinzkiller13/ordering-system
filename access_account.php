<?php

session_start();

if (isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
        
    $select_student = "SELECT * FROM student_account WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if($row['account_id'] == 1){
            $_SESSION['username'] = $row['username'];
            header('location:student_homepage.php');
        }
        
    }else{
        $error[] = 'incorrect email or password!';
    }
};
?>