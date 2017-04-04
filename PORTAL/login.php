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

$sql = "SELECT userid, username, password FROM users Where username='".$_POST['uname']."' and password ='".$_POST['psw']."'";
$result = $conn->query($sql);
if ($result) { 
    $row = $result->fetch_assoc();
	$_SESSION['userid'] = $row['userid'];
	echo $_SESSION['userid'];
	//header("Location: blank.php");

}
	
 else {
	echo "wrong username or password";
}    

$conn->close();

?>