<?php
if(isset($add))
{
	$sql=mysqli_query($con,"select * from hotel where name='$name' ");
	if(mysqli_num_rows($sql))
	{
	echo "this hotel is already added";	
	}		
	else
	{	
		$image=$_FILES['img']['name'];
		
		$qry=mysqli_query($con,"insert into hotel(name,image,address,details,rating,price) 
		values('$name','$image','$address','$details','$rating','$price')");
		
		
		//mkdir("../images/$pname");
		move_uploaded_file($_FILES['img']['tmp_name'],"../../images/".$_FILES['img']['name']);
		
		echo "hotel added successfully";
	}
}
	?>
	
<form method="post" enctype="multipart/form-data">	
<table class="table table-bordered">
	<tr>
		<th>Name</th>
		<td><input type="text" name="name" class="form-control"/></td>
	</tr>
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Address</th>
		<td><input type="text" name="address" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><input type="text" name="details" class="form-control"/>
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
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Add Package" name="add"/>
		</td>
	</tr>
	
</table> 
</form>