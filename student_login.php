<?php
include 'ordering_systemData/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stud_login.css">
</head>
<body>
    <div class="form-container">
        <?php include 'access_account.php'; ?>
        <form method="post">
            <h3>STUDENT LOGIN</h3>
            <?php
            if(isset($error)){
                foreach ($error as $error) {
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
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
            <button type="submit" name="submit">LOGIN</button>

            <div class="pass"><a href=""> Forgot Password?</a></div>
            <div class="signup_link">
                <a href="register.php">Register</a>
            </div>
        </form>
        
    </div>
</body>
</html>