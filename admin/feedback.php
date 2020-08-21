<table class="table table-bordered">
	<tr>
		<th>Sr.No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>	
		<th>Message</th>
	</tr>
	<?php
		$i=1;
		$qry=mysqli_query($con,"select * from query");
		while($row=mysqli_fetch_assoc($qry))
		{
	?>
	<tr>
		<td><?php echo $i; $i++; ?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['phone'];?></td>
		<td><?php echo $row['message'];?></td>
	</tr>
	<?php
	}
	?>
</table> 