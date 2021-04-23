<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Read All Record</h3>
	<table class="table table-striped">
		<tr>
			<th>id</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Delete|Update</th>
			
		</tr>
		<?php
		include_once 'config.php';
		$select=mysqli_query($con,"SELECT * FROM `usersdata` ");
		while ($row=mysqli_fetch_array($select))
		{?>
		<tr>
			<td><?=$row['id'];?></td>
			<td><?=$row['username'];?></td>
			<td><?=$row['email'];?></td>
			<td>
				<button value="<?= $row['id']?>" onclick="deleteData(this.value);" class="btn btn-danger">Delete</button>
				<button value="<?= $row['id']?>" onclick="selectUpdate(this.value);" class="btn btn-success">Update
				</button>
			</td>
		</tr>
		<?php
		};
		?>
	</table>

</body>
</html>