<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>
		<th>Sr.No.</th>
		<th>Hotel Name</th>
		<th>Location</th>
		<th>Email</th>
		<th>Date from</th>
		<th>Date to</th>
		<th>Delete</th>
	</tr>
	<?php
		$i=1;
		$sql=mysqli_query($con,"select * from booked_hotel where email='$user'"); 
		while($row=mysqli_fetch_assoc($sql))
		{
			//print_r($row);
		$id=$row['hotel'];	
		$q=mysqli_query($con,"select * from hotel where id='$id'");
		$rw=mysqli_fetch_assoc($q);
	?>
	<tr>
		<td><?php echo $i; $i++; ?></td>
		<td><?php echo $rw['name'];?></td>
		<td><?php echo $rw['location'];?></td>
		<td><?php echo $user;?></td>
		<td><?php echo $row['date_from'];?></td>
		<td><?php echo $row['date_to'];?></td>
		<td><a href="index.php?option=delete_bookedhotel&id=<?php echo $row['id'];?>"<span class="glyphicon glyphicon-remove"></span>Delete</a></td>
		
	</tr>
	<?php
		}
	?>
</table> 