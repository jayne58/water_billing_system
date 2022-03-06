<!DOCTYPE html>
<html>
    <head>
        <title>Insert page></title>

    </head>
    <body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="water billing system";
    $conn=mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("ERROR:  Could not connect" . mysqli_connect_error());
    }
    else{

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

         // if($password==$cpassword){
        $sql="INSERT INTO `water billing system`.`userdetails`(`fname`,`lname`,`phone_number`,`meter_number`,`residency`,`usertype`,`username`,`password`)
        VALUES('$fname', '$lname',$phone_number','$meter_number',$residency','$usertype','$username','$password')";
   // }else{
        //echo "Passwords do not match";
   // }
        $result=mysqli_real_query($conn, $sql);
     

        /*if(mysqli_query($conn, $sql)){
            */
        if($result){
     echo 'Registration successful. Click <a href="login.php">here</a>';
}else{
    echo 'something went wrong';
}
//mysqli_close($conn);
        }}

?>
    </body>
</html>