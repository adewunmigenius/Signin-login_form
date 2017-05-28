<?php
session_start();
include 'db.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql ="INSERT INTO user(first,last,uid,pwd)
VALUES ('$first', '$last', '$uid', '$pwd')";
$result = $conn->query($sql);
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset = "UTF-8">
<title>Sign up page</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
<form class="form-horizontal" role="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
<div class= "container">
	<div class="form-group ">
		<label for="firstname" class="col-sm-offset-2 col-sm-2 control-label">First Name</label>
		<div class="col-sm-4">
		<input type="text" class="form-control" id="first" name="first"
		placeholder="Enter First Name">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-offset-2 col-sm-2 control-label">Last Name</label>
		<div class="col-sm-4">
		<input type="text" class="form-control" id="last" name="last"
		placeholder="Enter Last Name">
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-sm-offset-2 col-sm-2 control-label">Username</label>
		<div class="col-sm-4">
		<input type="text" class="form-control" id="first" name="uid"
		placeholder="Enter username">
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-offset-2 col-sm-2 control-label">Password</label>
		<div class="col-sm-4">
		<input type="password" class="form-control" id="pwd" name="pwd"
		placeholder="Enter password">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-6">
		<button type="submit" class="btn btn-default">Sign up</button>
		</div>
	</div>
</div>
</form>
</body>
</html>