<?php
session_start();
include 'db.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql ="SELECT*FROM user WHERE uid='$uid' AND pwd ='$pwd'";
$result = $conn->query($sql);
 if(!$row = $result->fetch_assoc()){
 	echo "Your username or password is incorrect!";
 } else {
 	$_SESSION['id'] = $row['id'];
 }

 header("Location: index.php");
