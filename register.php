<?php
@include 'ordering_systemData/config.php';

$error = array(); // Initialize an empty array for errors

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $_POST["confirm_password"]);
    $hashpassword = md5($password);
    $account_id = $_POST["account_id"];
    

    // Check if the user already exists
    $check_query = "SELECT * FROM student_account WHERE username = '$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $error[] = 'User already exists!';
    } else {
        if ($password == $confirm_password) {
            $insert_query = "INSERT INTO student_account (username, password, account_id) VALUES ('$username', '$hashpassword', '$account_id')";
            $insert_result = mysqli_query($conn, $insert_query);

            if ($insert_result) {
                $message[] = 'Register Successfully';
            } else {
                $error[] = 'Error inserting user data!';
            }
        } else {
            $error[] = 'Passwords do not match!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/registration.css">
    <script>
        function text(x) {
            if (x == 1) document.getElementById("display").style.display = "block";
            else document.getElementById("display").style.display = "none";
        }

        function t(x) {
            if (x == 0) document.getElementById("display1").style.display = "none";
            else document.getElementById("display1").style.display = "none";
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h3>REGISTRATION</h3>
        <?php
        if (!empty($error)) {
            foreach ($error as $err) {
                echo '<span class="error-msg">' . $err . '</span>';
            }
        }
        ?>
        <?php

            if(isset($message)){
            foreach($message as $message){
                echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
            };
            };

            ?>
        <form action="" method="post">
            <div class="txt_field">
                <input type="email" name="username" required>
                <span></span>
                <label>USERNAME</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>PASSWORD</label>
            </div>
            <div class="txt_field">
                <input type="password" name="confirm_password" required>
                <label>CONFIRM PASSWORD</label>
                <span></span>
            </div>
           
            <input type="hidden" name="account_id" value="1">

            
            <button type="submit" name="submit">Register</button>
        </form>
        
    </div>
</body>
</html>