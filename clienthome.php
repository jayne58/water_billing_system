<?php
session_start();
/*if(!isset($_SESSION["username"])){
    header("location:login.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nairobi water billing system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
  <p class="paragraph-text">Welcome to Nairobi water and sewerage company where cutomer satisfaction is our priority. Make your water bill Payment
    by clicking on make payment on the dahsboard on the left of the screen,view details about your previous payments by clicking
    on view minitstatement and incase of any queries or feedback please send a message on the feedback form or visit 
    the cutomer care desk for assistance.
  </p>
  
</div>

    
</body>
    
</html>