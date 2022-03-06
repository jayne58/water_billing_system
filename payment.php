<?php

use LDAP\Result;

session_start();
include 'connection.php';
if(!isset($_SESSION["username"])){
    header("location:login.php");
}

    
 if(isset($_POST['submit'])){
      $username = $_SESSION["username"];
      // $lname = $_SESSION["lname"];
      // $meter_number = $_SESSION["meter_number"];
      
      $amount=$_POST['amount']; 
      $sql="SELECT fname, lname, phone_number, meter_number, residency, usertype  FROM userdetails  WHERE userdetails.username = '".$username."'" ;  
      $result = $conn->query($sql) or die($conn->error);
      $result->fetch_assoc();
      $fname = $result["fname"] ; 
      $lname = $result["lname"] ;
      $meter_number= $result["meter_number"] ;

      $regg="INSERT INTO `paymentdetails`(`fname`, `lname`, `meter_number`, `amount`, `payment_date`)VALUES( $fname, $lname, $meter_number, $amount,$date().today)";
     
        if(mysqli_query($conn, $regg)){
     echo 'Payment successful';
}else{
    echo 'something went wrong';
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
  <a class="active" href="clienthome.php">Home</a>
  <a href="payment.php">Make Payment</a>
  <a href="statement.php">View Mini Statement</a>
  <a href="feedback.php">Send feedback</a>
  <a href="logout.php">Logout</a>
</div>

<!-- Page content -->

<div class="content">
  <h2>Welcome to client home page</h2>
  <div class="container">

        <form action="#" method="POST" class="login">
            <p class="register-text">Make Payment</p>
                <div class="input-group">
            <input type="number" placeholder="amount" name="amount" required>
            </div>
            <div class="input-group">
            <input type="text" placeholder="mode of payment" name="mode of payment" list="mode of payment" required>
                <datalist id="mode of payment">
                <option value="cash"></option>
                <option value="mpesa"></option>
                </datalist><br>
                </div>
            
            <div class="input-group">
            <button name="submit" class="btn"> Submit</button>
            </div>
        </form>
    </div>
  
</div>

    
</body>
    
</html>








