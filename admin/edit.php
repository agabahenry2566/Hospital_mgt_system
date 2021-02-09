<?php 

	session_start();
	error_reporting(0);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Doctor</title>
</head>
<body>

<?php 

include("../include/header.php");

include("../include/connection.php");

 ?>

<div class="container-fluid">
	
	<div class="col-md-12">
		
		<div class="row">

			<div class="col-md-2" style="margin-left: -30px">
				
			<?php 

			include("sidenav.php");

			 ?>

			</div>

			<div class="col-md-10">

				<h5 class="text-center">Edit Doctor</h5>


				<?php 

				if (isset($_GET['id'])) {

					$id =$_GET['id'];



					$query = "SELECT * FROM doctors WHERE id='$id'";
					$res = mysqli_query($connect,$query);



					$row = mysqli_fetch_array($res);
				}

				 ?>
				 

		<div class="row">
			<div class="col-md-8">

				 <h5 class="text-center">Doctor Details</h5>

				 	<h5>
				 		<!--needs the edition for the drs information .-->
				 	 ID : <?php echo $row['id']; ?> 

				 	 </h5>

				 		
				 	</div>
				 	<div class="col-md-4">
				 		<h5 class="text-center">Update Salary</h5>
				 	</div>
				 </div>

			</div>
		</div>
	</div>
</div>




</body>
</html>