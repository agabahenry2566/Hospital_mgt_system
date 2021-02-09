
<?php 
	session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin section</title>
</head>
<body>

	<?php 


	include("../include/header.php");


 	?>

 	
 	<div class="container-fluid">
 		
 		<div class="col-md-12">
 		<div class="row">
 		<!--size of the navbar to the right-->
 			<div class="col-md-2" style="margin-left: -30PX">
 				<!--calling the side nav-->
 			<?php 

 				include("sidenav.php");

 				include("../include/connection.php");
 			 ?>

 			</div>

 			<!--the table for admins-->
 			<div class="col-md-10">
 					
 			<div class="col-md-12">
 				<div class="row">

 					<div class="col-md-6">
 						<h5 class="text-center">Admins</h5>


 							<?php 

 								$ad = $_SESSION['admin'];
 								$query = "SELECT * FROM admin WHERE username !='$ad' ";
 								$res = mysqli_query($connect,$query);

 								$output =  "

 										<table class='table table-bordered'>
 										<tr>
 								<th>ID</th>
 								<th>Username</th>
 								<th style='width: 10%;'>Action</th>
 										<tr>
 								";


 								if (mysqli_num_rows($res) < 1) {
 									$output .= "<tr><td colspan='3' class='text-center'>No New Admin</td></tr>";
 								}

 								while ($row = mysqli_fetch_array($res)) {
 									$id = $row['id'];
 									$username = $row['username'];

 									$output .= "

 											<tr>
 									<td>$id</td>
 									<td>$username</td>
 									<td>
 										<button id='$id' class='btn btn-danger remove'>Remove</button>
 									</td>

 									";
 								}


 								$output .="


 								</tr>
 							</table>
 								";

 								echo $output;
 							 ?>

 					</div>
 					


 				<!--the form to enter new admins-->
 					<div class="col-md-6">

 					<?php 

 					if (isset($_POST['add'])) {

 						$username = $_POST['uname'];
 						$password = $_POST['pass'];
 						$image = $_FILES['img']['name'];

 						$error = array();

 						if (empty($uname)) {
 							$error['u'] = "Enter Username";

 						}else if(empty($pass)){
 							$error['u'] = "Enter Password";

 						}else if(empty($img)){
 							$error['u'] = "Add Picture";
 						}

 						if (count($error) ==0) {

 							$q = "INSERT INTO admin(username,password,profile) VALUES('$username','$password','$image')";

 							$result = mysqli_query($connect,$q);

 							if ($result) {
 								move_uploaded_file($_FILES['img']['tmp_name'], "img/$image");
 							}else{

 							}

 						}
 					}


 					 ?>


 						<h5 class="text-center">Add Admin</h5>
 						<form method="post" enctype="multipart/form-data"></form>
 						<div class="form-group">
 							<label>Username</label>
 							
 							<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
 						</div>

 						<div class="form-group">
 							<label>Password</label>
 							<input type="password" name="pass" class="form-control" placeholder="Enter Password">
 							

 						</div>

 						<div class="form-group">
 							<label>Add Picture</label>
 						<input type="file" name="img" class="form-control">
 							
 						</div><br>

 						<input type="submit" name="add" value="Add New Admin" class="btn btn-success">

 					</div>

 				</div>


 			</div>

 			</div>

 		</div>

 		</div>

 	</div>
 	


</body>
</html>