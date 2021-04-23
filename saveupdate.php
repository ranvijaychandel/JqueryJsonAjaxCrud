<?php
	include_once 'config.php';
	$id =  $_POST["id"];
	$name =  $_POST["name"];
	$email =  $_POST["email"];
	if (!empty($id) && !empty($name) && !empty($email)) 
	{
		$update=mysqli_query($con, "UPDATE `usersdata` SET `username`='$name',`email`='$email' WHERE id='$id' ");
					if ($update==true) 
					{
						
						echo '<div class="alert alert-primary" role="alert">data updated</div>';
					}
					else
					{
						
						echo '<div class="alert alert-primary" role="alert">something wrong</div>';
					}
	}
	else
	{
		echo '<div class="alert alert-primary" role="alert">please fill all fields</div>';
		
	}
	
		

	?>