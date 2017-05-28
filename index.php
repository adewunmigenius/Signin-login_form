<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset = "UTF-8">
<title>Login page with MYSQL</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
<!--
<form action="signup.php" method="POST">
<input type="text" name="first" placeholder="Firstname"><br />
<input type="text" name="last" placeholder="lastname"><br />
<input type="text" name="uid" placeholder="Username"><br />
<input type="password" name="pwd" placeholder="password"><br />
<button type ="submit">Sign Up</button>
-->
<form class="form-horizontal" role="form" action="signin.php" method="POST">
<div class="container">
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
		<div class="col-sm-offset-4 col-sm-1">
		<button type="submit" class="btn btn-default">Sign in</button>
		</div>
		<div class="col-sm-2">
		<a href="signup.php" type="button" class="btn btn-default">Sign up</a>
		</div>
	</div>
</div>
</form>

<?php
	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	} else{
		echo 'You are not logged in!, Please Sign up.';
	}
?>
<form action="logout.php">
<div class="col-sm-offset-4 col-sm-2">
<input type ="submit" name="logout" value="Log out">
</div>
</form>
</body>
</html>