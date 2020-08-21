<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	<tr>
		<td colspan="9">
			<a href="index.php?option=add_hotel" class="btn btn-primary">Add Hotel</a>
		</td>
	</tr>
	<tr>
		<th>Sr.No.</th>
		<th>Name</th>
		<th>Image</th>
		<th>Address</th>
		<th>Details</th>
		<th>Rating</th>
		<th>Price</th>
	</tr>
	<?php
		$i=1;
		$sql=mysqli_query($con,'select * from hotel');
		while($row=mysqli_fetch_assoc($sql))
		{
		$img=$row['image'];	
			//print_r($row);
	?>
	<tr>
		<td><?php echo $i; $i++; ?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['image'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['details'];?></td>
		<td><?php echo $row['rating'];?></td>
		<td><?php echo $row['price'];?></td>
		<td><img height="100px" width="100px" src="../../images/<?php echo $row['image'];?>">
		</td>
		
		<td><a href="index.php?option=delete_hotel&id=<?php echo $row['id'];?>"<span class="glyphicon glyphicon-remove"></span>Delete</a></td>
		
		<td><a href="index.php?option=update_hotel&id=<?php echo $row['id']; ?>" <span class="glyphicon glyphicon-pencil">Update</span></td>
	</tr>
	<?php
		}
	?>
</table> 