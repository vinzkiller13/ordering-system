<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/change_password.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="form-container">
        <form action="" method="post">
            <h3>CHANGE PASSWORD</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <div class="txt_field">
                <input type="password" name="email" required>
                <span></span>
                <label>OLD PASSWORD</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>NEW PASSWORD</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>CONFIRM NEW PASSWORD</label>
            </div>

            <button>SUBMIT</button>
        </form>
    </div>

    
    <script src="js/script.js"></script>
</body>

</html>
