<?php
if($_SESSION){
 session_start();
}
include 'db.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$uid = mysqli_real_escape_string($uid);
$pwd = mysqli_real_escape_string($pwd);

$salt1 = "qm&h*";
$salt2 = "pg!@";
$prtpwd = hash('ripemd128', "$salt1$pwd$salt2");

$sql ="SELECT*FROM user WHERE uid='$uid' AND pwd ='$prtpwd'";
$result = $conn->query($sql);
 if(!$row = $result->fetch_assoc()){
 	echo "Your username or password is incorrect!";
 } else {
 	$_SESSION['id'] = $row['id'];
 }

 header("Location: index.php");
