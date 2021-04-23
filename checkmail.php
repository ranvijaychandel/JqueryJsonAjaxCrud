
<?php
include_once("config.php");
	$userEmail = $_GET['email'];

	$checkEmail=mysqli_query($con, "SELECT email from usersdata WHERE email='$userEmail'");

	if (mysqli_num_rows($checkEmail) >0) {
	  // echo "<b style='color:red;'>Email already exist.</b>";
	  echo '<div class="alert alert-danger" role="alert">Email already exist.</div>';
		
	} else {
	  // echo "<b style='color:green;'>Valid Email </b>";
		echo '<div class="alert alert-success" role="alert">Valid Email.</div>';
		
	}
?>