<?php 
	
	
	include ("include/connection.php");


	if (isset($_POST['create'])) {

		$firstname = $_POST['fname'];
		$surname = $_POST['sname'];
		$username = $_POST['uname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$password = $_POST['pass'];
		$confirm_password = $_POST['con_pass'];


		$error = array();


		if (empty($firstname)) {
			$error['ac'] = "Enter Firstname";

		}else if (empty($surname)) {
			$error['ac'] = "Enter Surname";

		}else if (empty($username)) {
			$error['ac'] = "Enter Username";

		}else if (empty($email)) {
			$error['ac'] = "Enter Email";

		}else if (empty($phone)) {
			$error['ac'] = "Enter Phone Number";

		}else if (empty($gender)) {
			$error['ac'] = "Select Your Gender";

		}else if (empty($password)) {
			$error['ac'] = "Enter Your Password";

		}else if ($confirm_password != $password) {
			$error['ac'] =" Password Donot match";		
		}

		if (count($error) ==0 ) {
			$query = "INSERT INTO patient(firstname,surname,username,email,phone,gender,password,date_reg,profile) VALUES('$firstname','$surname','$username','$email','$phone','$gender','$password',NOW(),'patient.jpg')";

			$result = mysqli_query($connect,$query);

			if ($result) {

				echo "<script>alert('You have successfuly got an Account')</script>";

				header("Location: patientlogin.php");

			}else{
				
				echo"<script>alert('failed')</script>";
			}

		}

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Account </title>
</head>
<body style="background-image: url(img/back.jpg); background-size: cover; background-repeat: no-repeat;">

<?php 
	include("include/header.php");

 ?>
 	<div class="container-fluid">
 		<div class="col-md-12">
 			<div class="row">

 				<div class="col-md-3"></div>
 				<div class="col-md-6 my-2 jumbotron">
 					<h5 class="text-center text-info my-2"> Create An Account</h5>

 					<form method="post">
 						<div class="form-group">
 							<label>Firstname</label>
 							<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
 							
 						</div>

 						<div class="form-group">
 							<label>Surname</label>
 							<input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname">
 							
 						</div>

 						<div class="form-group">
 							<label>Username</label>
 							<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
 							
 						</div>
 						<div class="form-group">
 							<label>Email</label>
 							<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email">
 							
 						</div>

 						<div class="form-group">
 							<label>Phone no</label>
 							<input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
 							
 						</div>
 						<div class="form-group">

 							<label>Gender</label>
 							<select name="gender" class="form-control">
 								<option value="">Choose Your Gender</option>
 								<option value="Male">Male</option>
 								<option value="Female">Female</option>
 							</select>
 						</div>

 						<div class="form-group">
 							<label>Password</label>
 							<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
 							
 						</div>
 						<div class="form-group">
 							<label>Confirm Password</label>
 							<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirmation Password">
 							
 						</div>

 						<input type="submit" name="create" value="create Account" class="btn btn-info">
 						<p>Already have Account <a href="patientlogin.php">Click Here</a></p>

 					</form>


 				</div>
 				<div class="col-md-3"></div>


 			</div>
 		</div>
 	</div>



</body>
</html>