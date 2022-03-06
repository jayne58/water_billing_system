  
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

        <form action="insert2.php" method="POST" class="login">
            <p class="register-text">Feedback Form</p>
            <div class="input-group">
            <input type="text" placeholder="How would you rate our services?" name="quality_score" list="quality_score" required>
                <datalist id="quality_score">
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
                <option value="5"></option>
                <option value="6"></option>
                <option value="7"></option>
                <option value="8"></option>
                <option value="9"></option>
                <option value="10"></option>
                </datalist><br>
                </div>
        
                <div class="input-group">
                    <p>What is the reason for your score above?</p>
                    <textarea name="feedback"  rows="4" cols="40">                   
                    </textarea><br>
                    <button name="submit" style="background-color:aqua"> Submit</button>
                </div>
                <div>
                
                </div>
        </form>
    </div>
  
</div>

    
</body>
    
</html>








