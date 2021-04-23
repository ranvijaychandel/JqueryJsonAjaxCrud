<?php
include_once 'config.php';

	$id =  $_POST["id"];
$delete=mysqli_query($con,"DELETE FROM `usersdata` where id='$id'");
if ($delete==true) {
	echo '<div class="alert alert-primary" role="alert">Data deleted successfully</div>';
}
else{
	echo '<div class="alert alert-primary" role="alert">query wrong</div>';
}?>