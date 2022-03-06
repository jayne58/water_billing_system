<?php
include 'connection.php';
session_start();
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM userdetails WHERE username='".$username."' && password='".$password."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    if($row["usertype"]=="client"){
        $_SESSION["username"]=$username;
        header("location:clienthome.php");

    }
    elseif($row["usertype"]=="staff"){
        $_SESSION["username"]=$username;
        header("location:staffhome.php");

    }
    else{
        echo "username or password is incorrect";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <!--title-->
        <title>Nairobi water billing system</title>
    </head>
    <body>
        <center>
    <div class="container">

        <form action="#" method="POST" class="login">
            <p class="register-text">Login</p>
                <div class="input-group">
            <input type="text" placeholder="username" name="username" required>
            </div>
            <div class="input-group">
            <input type="password" placeholder="Password" name="password" required>
            </div>
            
            <div class="input-group">
            <button name="submit" class="btn"> Login</button>
            </div>
            <p>Don't have an account?<a href="register.php">Register Here</a></p>
        </form>
    </div>
    </center>
    </body>

</html>