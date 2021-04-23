<?php
	include_once 'config.php';
		$id=htmlspecialchars(trim($_POST['id']));
	$select=mysqli_query($con, "SELECT * FROM `usersdata` WHERE id='$id' ");
	$row=mysqli_fetch_array($select);		

	?>
<div>
	<h1>Update Records</h1>
	<div class="form-group">
		<input type="hidden" id="id name="id" value="<?= $row['id'];?>" class="form-control">
	</div>
    <div class="form-group">
       <input type="text" id="name" name="sel_name" value="<?= $row['username'];?>" class="form-control">
    </div>
    <div class="form-group">
       <input type="email" id="email" name="sel_email" value="<?= $row['email'];?>" class="form-control">
   </div>     
		<button value="<?= $row['id']?>" onclick="saveUpdate(this.value);" class="btn btn-primary roundede-pill">SaveData</button>
	
</div>
        