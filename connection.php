<?php
$server = "localhost";
$user="root";
$password ="";
$db ="water billing system";
$conn = mysqli_connect($server, $user, $password, $db);
if($conn){
    echo"Connected to the database";
   echo("connected");

}else{
    echo"mysqli_error";
}
?>
