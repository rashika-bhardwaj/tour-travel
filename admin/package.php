<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	<tr>
		<td colspan="9">
			<a href="index.php?option=add_package" class="btn btn-primary">Add Package</a>
		</td>
	</tr>
	<tr>
		<th>Sr.No.</th>
		<th>Package Name</th>
		<th>Package Type</th>
		<th>Duration</th>
		<th>Location</th>
		<th>Price</th>
		<th>Images</th>
		<th>Details</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>
	<?php
		$i=1;
		$sql=mysqli_query($con,'select * from package');
		while($row=mysqli_fetch_assoc($sql))
		{
		$img=$row['image'];	
			//print_r($row);
	?>
	<tr>
		<td><?php echo $i; $i++; ?></td>
		<td><?php echo $row['package_name'];?></td>
		<td><?php echo $row['package_type'];?></td>
		<td><?php echo $row['duration'];?></td>
		<td><?php echo $row['location'];?></td>
		<td><?php echo $row['price'];?></td>
		<td><img height="100px" width="100px" src="../../images/<?php echo $row['image'];?>">
		</td>
		
		<td><?php echo $row['details'];?></td>
		<td><a href="index.php?option=delete_package&pid=<?php echo $row['id'];?>"<span class="glyphicon glyphicon-remove"></span>Delete</a></td>
		
		<td><a href="index.php?option=update_package&pid=<?php echo $row['id']; ?>" <span class="glyphicon glyphicon-pencil">Update</span></td>
	</tr>
	<?php
		}
	?>
</table> 