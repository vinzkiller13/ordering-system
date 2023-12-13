<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic MySQLi Commands</title>
</head>
<body>
    <div>
        <form method="POST" action="add.php">
            <label>Student Name:</label><input type="text" name="student_name"><br>
            <label>Course:</label><input type="text" name="course"><br>
            <label>Password:</label><input type="text" name="password"><br><br><br>
            <input type="submit" name="add">
        </form>
    </div>
    <br>
    <div>
        <table border="1">
            <thead>
            <th>Student Name</th>
            <th>Course</th>
            <th>Password</th>
            <th></th>
            </thead>
            <tbody>
                <?php
                include('conn.php');
                $query=mysqli_query($conn,"select * from `user`");
                while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['student_name']; ?></td>
                        <td><?php echo $row['course']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>