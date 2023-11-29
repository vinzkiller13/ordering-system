<?php
@include 'config.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/student_login.css">
</head>
<body>
    <div class="form-container">
        <form action="access_account.php" method="post">
            <h3>LOGIN</h3>
            <?php
            if(isset($error)){
                foreach ($error as $error) {
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>STUDENT</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>PASSWORD</label>
            </div>
            
            <button type="submit" name="submit">LOGIN</button>

            <div class="pass"><a href=""> Forgot Password?</a></div>
            <div class="signup_link">
                <a href="register.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>