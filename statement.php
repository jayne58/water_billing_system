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
  <div class="container">
  <?php
include 'connection.php';
$sql = "SELECT fname, lname, meter_number, amount, payment_date  FROM paymentdetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class='table-bordered'><tr class='table-primary'><th>fname</th><th>lname</th><th>meter_number</th><th>amount</th><th>payment_date</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr class='table-primary'><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["meter_number"]."</td><td>".$row["amount"]."</td><td>".$row["payment_date"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
        
                
                
    </div>
  
</div>

    
</body>
    
</html>

