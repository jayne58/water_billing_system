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

        <form action="insert.php" method="POST" class="login">
            <p class="register-text">Register</p>
            <div class="input-group">
            <input type="text" placeholder="First Name" name="fname" required>
            </div>
            <div class="input-group">
            <input type="text" placeholder="Last Name" name="lname" required>
            </div>
            <div class="input-group">
            <input type="numbers" placeholder="Phone Number" name="phone_number" required>
            </div>
            <div class="input-group">
            <input type="numbers" placeholder="Meter Number" name="meter_number" required>
            </div>
            <div class="input-group">
            <input type="text" placeholder="Residency" name="residency" required>
            </div>
            <div class="input-group">
            <input type="text" placeholder="usertype" name="usertype" list="usertype" required>
                <datalist id="usertype">
                <option value="staff">staff</option>
                <option value="client">client</option>
                </datalist><br>
                </div>
                <div class="input-group">
            <input type="text" placeholder="username" name="username" required>
            </div>
            <div class="input-group">
            <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
            <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
            <button name="submit" class="btn"> Register</button>
            </div>
            <p>Already have an account?<a href="login.php">Login Here</a></p>
        </form>
    </div>
</center>
    </body>

</html>