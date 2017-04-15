<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
   
   
   $user_check = $_SESSION['userid'];

   //var_dump($_SESSION);
   
   $sql = "select * from profile where userid = '$user_check' ";
   $result = $conn->query($sql);
   //echo $sql;

   $row = $result->fetch_assoc();
   //print_r($row);
   $login_session = $row['userid'];
   $fname=$row['first_name'];
   $lname=$row['last_name'];
   //$dob= $row['dob'];
   $roll_number=$row['roll_number'];
   //$username=$row['sid'];
   $college=$row['college'];

   //var_dump($row);
   
   if(!isset($_SESSION['userid'])){
      //header("Location: login.php");
   }
?>