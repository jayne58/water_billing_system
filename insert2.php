<?php
    include 'connection.php';
    
 if(isset($_POST['submit'])){
        $score=$_POST['quality_score'];
        $feedback=$_POST['feedback'];
        
         
        $regg="INSERT INTO `feedbackdetails`(`score`, `feedback`)
      
     VALUES('$score','$feedback')";
    
        if(mysqli_query($conn, $regg)){
     echo 'Thanks for your feedback.Click <a href="clienthome.php">here</a> to go back to client home page';
}else{
    echo 'something went wrong';
}
}
mysqli_close($conn);       
?>