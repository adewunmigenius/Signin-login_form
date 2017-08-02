<?php
$conn =mysqli_connect("$db_host","username","password","$db_name");
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
?>
