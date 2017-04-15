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

$sql = "SELECT userid, username, password FROM profile Where username='".$_POST['uname']."' and password ='".md5($_POST['psw'])."'";
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows >0 ) { 
    $row = $result->fetch_assoc();
    //var_dump($row);
	$_SESSION['userid'] = $row['userid'];
	//echo $_SESSION['userid'];
	header("Location: user_profile.php");

} else {
	echo "wrong username or password";
}    

$conn->close();

?>