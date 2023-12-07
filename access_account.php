
<?php 
include 'ordering_systemData/config.php';
session_start();

if (isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);
        
    $select_student_account = "SELECT * 
			  FROM student_account 
			  INNER JOIN access_account ON student_account.account_id = access_account.account_id";
    $result = mysqli_query($conn, $select_student_account);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if($row['account_id'] == 1){
            $_SESSION['username'] = $row['username'];
            header('location:student_homepage.php');
        }
        
    }else{
        $error[] = 'incorrect email or password!';
    }
}
?>