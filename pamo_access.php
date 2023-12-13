<?php
include 'ordering_systemData/config.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $select_student_account = "SELECT * FROM `pamo_account` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $select_student_account);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            echo 'Entered Password: ' . $password . '<br>';
            echo 'Hashed Password from Database: ' . $hashedPassword . '<br>';

            if (password_verify($password, $hashedPassword)) {
                if ($row['account_id'] == 2) {
                    header('location: pamo_homepage.php');
                    exit();
                }
                else {
                    $error[] = 'Invalid account type';
                }
            } else {
                $error[] = 'Incorrect password!';
            }
        } else {
            $error[] = 'Incorrect email or password!';
        }
    } else {
        // Handle database query error
        $error[] = 'Database error: ' . mysqli_error($conn);
    }
}
?>