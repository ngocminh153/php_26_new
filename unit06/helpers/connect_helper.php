<?php 
function connect(){
	$servername = "localhost";

	$username = "root";

	$password = "";

	$dbname = "php_blog";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_errno){
		echo "failed to connect to mySQL: " > $conn->connect_errno;
		exit();
	}
	return $conn;
}
?>