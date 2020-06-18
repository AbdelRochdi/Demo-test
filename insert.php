<?php
 
 // Create connection
 $con=mysqli_connect("localhost","root","","testy");
 
 // Check connection
 if (mysqli_connect_errno())
 {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
  
if (isset($_POST['name'])) {
    $score = $_POST['name'];
}
 
 $sql = "INSERT INTO scores(score) VALUES ($score)";
 $result = mysqli_query($con, $sql);
 // Check if there are results

?>