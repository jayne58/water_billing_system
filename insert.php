    <?php
    include 'connection.php';
    
 if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phone_number=$_POST['phone_number'];
        $meter_number=$_POST['meter_number'];
        $residency=$_POST['residency'];
        $usertype=$_POST['usertype'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
         if($password==$cpassword){
        $regg="INSERT INTO `userdetails`(`fname`, `lname`, `phone_number`, `meter_number`, `residency`, `usertype`, `username`, `password`)
      
     VALUES('$fname','$lname','$phone_number','$meter_number','$residency','$usertype','$username','$password')";
    }else{
        echo "Passwords do not match";
    }
        if(mysqli_query($conn, $regg)){
     echo 'Registration successful. Click <a href="login.php">here</a>';
}else{
    echo 'something went wrong';
}
}
mysqli_close($conn);       
?>
   