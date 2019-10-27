<?php
    require 'config_database_index.php';
    session_start();
?>

<!DOCTYPE html>
<html>

<head><title>Admin-Login</title>
<link rel="stylesheet" type="text/css" href="src/style/adminlogin.css">
<link rel="shortcut icon" type="image/png "href="src/images/4.png">
<script src="src/js/adminsign.js"></script>
</head>

<body>
<div class="loginbox">
<img src="src/images/admin_512dp.png" class="user">
<h2>LOGIN</h2>
<form method="POST" action="adminlogin.php">
<p>Username</p><input type="text" placeholder="Enter Username" required id="u-name" name="username">
<p>Password</p><input type="password" placeholder="Enter Password" required pattern="[0-9a-zA-z]{3.}" id="pass" name="password">
<input type="submit" value="Sign in" class="submit" name="submit">
</form>
<a href="abc">Forgot Password</a>
</div>


</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin where username = '$name' and password = '$password'";
        $result = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        if($count == 1){
            $_SESSION['name'] = $name;
            header("Location:admin.php");
        }
        else if($count > 1 || $count < 1){
            echo("<script>alert('error!');</script>");
        }

    }
?>