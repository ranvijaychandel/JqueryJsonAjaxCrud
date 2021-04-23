
<?php
include_once 'config.php';

extract($_POST);


	if (isset($_POST['name']) && isset($_POST['email'])) 
	{
		$insert=mysqli_query($con,"INSERT INTO `usersdata`(`username`, `email`) VALUES  ('$name','$email')");
		if ($insert==True) {	
			echo '<div class="alert alert-primary" role="alert">Data inserted successfully</div>';
		}
		else{
			echo '<div class="alert alert-primary" role="alert">Something wrong</div>';
			
		}
	}
?>