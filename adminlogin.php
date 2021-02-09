<?php
session_start();

include("include/connection.php");

if (isset($_POST['login'])) {
	
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$error = array();

	if (empty($username)) {
		$error['admin'] = "Enter Username";

	}else if (empty($password)) {
		$error['admin'] = "Enter Password";
	}

	if (count($error)==0) {
		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";

		$result =mysqli_query($connect,$query);

		//correct credentials
		if (mysqli_num_rows($result)==1) {
			echo "<script>alert('You have Logged in As an Admin')</script>";

			$_SESSION['admin'] = $username;
				//redirect to the index page of the admin
			header("Location:admin/index.php");

			exit();
			//wrong username or password else
		}else{
			echo "<script>alert('Invalid username or password')</script>";
		}
	}

 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>

	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="main.css">
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body style="background-image: url(img/back.jpg); background-repeat: no-repeat; background-size: cover">

	<?php
	include("include/header.php");

	?>

	<div style="margin-top: 20px"></div>
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3"></div>

				<div class="col-md-6 jumbotron">

					<img src="img/admin.png" class="col-md-5">

					<form method="post" class="my-2">

					<div >

						<?php

						if (isset($error['admin'])) {
							
							$sh = $error['admin'];

							$show = "<h4 class='alert alert-danger'>$sh</h4>";

						}else{
							$show = "";
						}

						echo $show;
						?>

					</div>

						<div class="form-group">
							<label>Username</label>
							<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter your Username">
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="pass" class="form-control" placeholder="Enter your Password">
						</div>

						<input type="submit" name="login" class="btn btn-success" 
						value="Login">
					</form>

				</div>

				<div class="col-md-3"></div>

			</div>

		</div>

	</div>

</body>
</html>