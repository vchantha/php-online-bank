<?php
$servername = "192.168.56.101";
$username = "root";
$password = "root123";
$database = "bnkms"
$port = "30036";

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
	header('location:server_down.php');
} 
else{
	// echo "Connection Established";
}

?>
