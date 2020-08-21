<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>
		<th>Sr.No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Password</th>
		<th>Id_Proof</th>
		<th>Profile Image</th>
		<th>Country</th>
		<th>State</th>
		<th>Address</th>
		<th>Delete</th>
		</tr>
	<?php
		$i=1;
		$sql=mysqli_query($con,'select * from user');
		while($row=mysqli_fetch_assoc($sql))
		{
		$img=$row['id_image'];	
			//print_r($row);
	?>
	<tr>
		<td><?php echo $i; $i++; ?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['mobile'];?></td>
		<td><?php echo $row['password'];?></td>
		<td><?php echo $row['id_proof'];?></td>
		<td><img height="100px" width="100px" src="../../images/<?php echo $row['id_image'];?>"></td>
		<td><?php echo $row['country'];?></td>
		<td><?php echo $row['state'];?></td>
		<td><?php echo $row['address'];?></td>
			
		<td><a href="index.php?option=delete_user&id=<?php echo $row['id']; ?>" <span class="glyphicon glyphicon-pencil">Delete</span></td>
	</tr>
	<?php
		}
	?>
</table> 