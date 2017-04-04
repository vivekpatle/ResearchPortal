<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_portal";

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 6; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$p_sname = trim(strtolower($_POST['sname']));
	$p_rollnumber = trim($_POST['rollnumber']);
	$p_lname = trim(strtolower($_POST['lname']));
	$p_username = "{$p_sname[0]}{$p_lname}@{$p_rollnumber}"; 
	$sql = "insert into admin (username, password) values ('".$p_username."','".md5(randomPassword()) ."')";
    $result = $conn->query($sql);

if($result){echo "registered. Your password is --> ".(randomPassword());}
else {echo "failed registration";} 
$conn->close();

?>
