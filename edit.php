<?php
include('conn.php');
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `user` where userid='$id'");
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Basic MYSQLi Commands</title>
    </head>
        <body>
            <h2>Edit</h2>
            <form method="POST" action="update.php?id=<?php echo $id; ?>">
            <label>Student Name:</label><input type="text" value="<?php echo $row['student_name']; ?>" name="student_name">
            <label>Course:</label><input type="text" value="<?php echo $row['course']; ?>" name="course">
            <label>Password:</label><input type="text" value="<?php echo $row['password']; ?>" name="password">
            <input type="submit" name="submit">
            <a href="index.php">Back</a>
        </form>
        </body>
</html>