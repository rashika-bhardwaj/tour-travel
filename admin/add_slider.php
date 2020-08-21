<?php 

if(isset($update))
{
	$imgNew=$_FILES['img']['name'];
	
	$sql="insert into slider values('','$imgNew','$cap')";	
	
	if(mysqli_query($con,$sql))
	{
	move_uploaded_file($_FILES['img']['tmp_name'],"../image/Slider/".$_FILES['img']['name']);	
	header('location:dashboard.php?option=slider');	
	}
	
}
?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	<tr style="height:40">
		<th>Image</th>
		<td><input type="file" name="img" accept="image/*" class="form-control"/></td>
	</tr>
	<tr>	
		<th>Name</th>
		<td><input type="text" name="name" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Rating</th>
		<td><input type="number" name="rating" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Price</th>
		<td><input type="number" name="price" class="form-control"/>
		</td>
	</tr>
	<tr>
		<th>Address</th>
		<td><textarea name="address" class="form-control"></textarea></td>
	</tr>
	<tr>	
		<th>Details</th>
		<td><input type="text" name="name" class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add new Slider" name="update"/>
		</td>
	</tr>
</table> 
</form>