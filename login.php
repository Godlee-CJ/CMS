<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><br><br>
	<h3>Student Management System</h3><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required style=" font-size:25px ;
						background-color: rgb(52, 135, 255);
						font-family: sans-serif;
						border-radius: 18px;
						margin-left: 20px;
						margin-bottom: 40px;">
		<input type="submit" name="student_login" value="Student Login" required style=" font-size:25px ;
						background-color: rgb(52, 135, 255);
						font-family: sans-serif;
						border-radius: 18px;
						margin-left: 20px;
						margin-bottom: 40px;">
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>