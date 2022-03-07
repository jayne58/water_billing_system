<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:login.php");
}
include 'connection.php';
    
 if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $meter_number=$_POST['meter_number'];
        
        $regg="DELETE FROM 'userdetails' WHERE meter_number= $meter_number";
    
        if(mysqli_query($conn, $regg)){
          echo "<script> alert('User deleted successfully')</script>";
}else{
  echo "<script> alert('Something went wrong')</script>";
}
}
mysqli_close($conn); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nairobi water billing system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#"><img src="image4.jpg" alt="logo" style="width:40px"></a>
      <a class="navbar-brand" href="#">Nairobi Water and Sewerage Company</a>
    </div>
  </div>
</nav>
<!-- The sidebar -->
<div class="sidenav">
  <a class="active" href="staffhome.php">Home</a>
  <a href="userdetails.php">View userdetails</a>
  <a href="paymentdetails.php">View Payment details</a>
  <a href="delete.php">Delete a user</a>
  <a href="update.php">Update a user's details</a>
  <a href="feedback2.php">view client's feedback</a>
  <a href="logout.php">Logout</a>
</div>

<!-- Page content -->
<div class="content">
<div class="container">

<form action="#" method="POST" class="login">
    <p class="register-text">Delete a user</p>
        <div class="input-group">
    <input type="text" placeholder="meter number" name="meter_number" required>
    </div>
    <div class="input-group">
    <input type="text" placeholder="first name" name="fname" required>
    </div>
    <div class="input-group">
    <input type="text" placeholder="last name" name="lname" required>
    </div>

     <div class="input-group">
    <button name="submit" class="btn"> Delete</button>
    </div>
</form>
</div>
  
</div>
