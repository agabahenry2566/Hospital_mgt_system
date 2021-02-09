<?php 

	session_start();

	include("include/connection.php");

	if (isset($_POST['login'])) {
		
		$uname = $_POST['uname'];
		$password = $_POST['pass'];


		$error = array();

		//if the user status is still pending or not // pass or password


		$q = "SELECT * FROM doctors WHERE username='$uname' AND password='$password' ";

		$qq = mysqli_query($connect,$q);

		$row = mysqli_fetch_array($qq);


		if (empty($uname)) {
			$error['login'] = "Enter Username";

		}else if (empty($password)) {
			$error['login'] = "Enter password";

		}else if ($row['status'] == "Pendding") {
			$error['login'] = "please Wait for the Admin to Confirm";

		}else if ($row['status'] == "Rejected") {
			$error['login'] = "Try Again Later";
		}
		//pass or password
		if (count($error)==0) {
			$query = "SELECT * FROM doctors WHERE username='$uname' AND password='$password' ";

			$res = mysqli_query($connect,$query);

			if (mysqli_num_rows($res)){

				echo "<script>alert('Done')</script>";

				$_SESSION['doctor'] = $uname;


				header("Location:doctor/index.php");
			}else{
				echo "<script>alert('Invalid Account')</script>";

			}
		}

	}

	if (isset($error['login'])) {
		$l = $error['login'];

		$show = "<h5 class='text-center' alert alert-danger>$l</h5>";
	}else {
		$show = "";
	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Doctor Login Page</title>
</head>
<body style="background-image: url(img/back.jpg); background-size: cover; background-repeat: no-repeat;">

	<?php 

	include("include/header.php");

 	?>

 	<div class="container-fluid">
 		<div class="col-md-12">
 			<div class="row">
 				<div class="col-md-3"></div>
 				<div class="col-md-6 jumbotron my-2" >
 					<h5 class="text-center my-2">Doctor's Login</h5>

 					<div>
 						
 						<?php echo $show; ?>
 					</div>
 					<form method="post">

 						<div class="form-group">
 							<label>Username</label>
 							<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
 						</div>

 						<div class="form-group">
 							<label>Password</label>
 							<input type="password" name="pass" class="form-control" autocomplete="off">
 						</div>

 						<input type="submit" name="login" class="btn btn-success" value="Login">

 						<p>I don't have an account <a href="apply.php">Apply Now!!!</a></p>
 					</form>

 				</div>
 				<div class="col-md-3"></div>
 			</div>
 		</div>
 	</div>


</body>
</html>