<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>
		<th>Sr.No.</th>
		<th>Package</th>
		<th>Email</th>
		<th>Date of Check_In</th>
		<th>Payment Mode</th>
		<th>Delete</th>
	</tr>
	<?php
		$i=1;
		$sql=mysqli_query($con,"select * from booked_package where email='$user'"); 
		while($row=mysqli_fetch_assoc($sql))
		{
			//print_r($row);
		$pid=$row['package'];	
		$q=mysqli_query($con,"select * from package where id='$pid'");
		$r=mysqli_fetch_assoc($q);
	?>
	<tr>
		<td><?php echo $i; $i++; ?></td>
		<td><?php echo $r['location'];?></td>
		<td><?php echo $user;?></td>
		<td><?php echo $row['date_from'];?></td>
		<td><?php echo $row['payment_mode'];?></td>
		<td><a href="index.php?option=delete_booking&pid=<?php echo $row['id'];?>"<span class="glyphicon glyphicon-remove"></span>Delete</a></td>
		
	</tr>
	<?php
		}
	?>
</table> 