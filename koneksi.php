<?php
$host 		= "localhost";
$username 	= "root";
$password 	= "";
$db_name 	= "jurnal_ilham";
$conn = mysqli_connect($host, $username, $password, $db_name);
if(!$conn){
	die(mysqli_error($conn));
}
?>