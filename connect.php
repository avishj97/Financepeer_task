   <?php
$host="localhost";
$user="root";
$password="";
$db="financepeer_task";

$connect=mysqli_connect($host,$user,$password,$db);
if (!$connect) {
	die("Connection failed: " . mysqli_connect_error());
}



?>