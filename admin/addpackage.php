<?php
if(isset($add))
{
	$sql=mysqli_query($con,"select * from package where package_name='$pname' ");
	if(mysqli_num_rows($sql))
	{
	echo "this packages is already added";	
	}		
	else
	{	
		$image=$_FILES['img']['name'];
		
		$qry=mysqli_query($con,"insert into package(package_name,package_type,duration,location,price,image,details) 
		values('$pname','$ptype','$pdura','$location','$price','$image','$details')");
		
		
		//mkdir("../images/$pname");
		move_uploaded_file($_FILES['img']['tmp_name'],"../../images/".$_FILES['img']['name']);
		
		echo "Package added successfully";
	}
}
	?>
	
<form method="post" enctype="multipart/form-data">	
<table class="table table-bordered">
	<tr>
		<th>Package Name</th>
		<td><input type="text" name="pname" class="form-control"/></td>
	</tr>
	
	<tr>	
		<th>Package Type</th>
		<td><input type="text" name="ptype" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Time(package duration)</th>
		<td><input type="text" name="pdura" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Location</th>
		<td><input type="text" name="location" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Price</th>
		<td><input type="text" name="price" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Details</th>
		<td><input type="text" name="details" class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Add Package" name="add"/>
		</td>
	</tr>
	
</table> 
</form>