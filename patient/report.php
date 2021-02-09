<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Report</title>
</head>
<body>
	<?php 

	include("../include/header.php");
	include("../include/connection.php")

	 ?>

	  <div class="container-fluid">
	 		<div class="col-md-12">
	 			<div class="row">
	 				<div class="col-md-2" style="margin-left: -30px;">

	 					<?php 
	 						include("sidenav.php");

	 					 ?>
	 					
	 				</div>
	 				<div class="col-md-10">
	 					<h5 class="text-center my-2">Patient Report</h5>

	 				 <?php 

              		if (isset($_POST['send'])) {

              			$title = $_POST['send'];

              			$message = $_POST['message'];

              			if (empty($title)) {
              				

              			}else if(empty($message)) {

              				
              			}else{

              				$user = $_SESSION['patient'];

              				$query = "INSERT INTO report(title,message,date_send) VALUES('$title','$message','$user',NOW()) ";

              				$result = mysqli_query($connect,$query);

              				if ($result) {

              					echo "<script>alert('You have sent your report')</script>";



              				}

              			}
              		}

              	?>

	 					<div class="col-md-12">
              			<div class="row">

              				<div class="col-md-3"></div>

              				<div class="col-md-6 jumbotron bg-success my-5">

              					<h5 class="text-center my-2">Send AReport</h5>

              					<form method="post">

              						<label>Title</label>
              						<input type="text" name="title" autocomplete="off" class="form-control" placeholder="Enter Title of the Report">

              						<label>Message</label>
              						<input type="text" name="message" autocomplete="off" class="form-control" placeholder="Enter Message"><br>

              						<input type="submit" name="send" value="Send Report" class="btn btn-info mx-5" >

              					</form>

              				</div>
              				<div class="col-md-3"></div>

              			</div>

              		</div>


              				
	 				</div>

	 			</div>
	 	
	 	</div>
	 </div>




</body>
</html>