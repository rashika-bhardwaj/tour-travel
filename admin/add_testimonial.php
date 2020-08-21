<?php
if(isset($add))
{
	$sql=mysqli_query($con,"select * from testimony where username='$username' ");
	if(mysqli_num_rows($sql))
	{
	echo "this testimony is already added";	
	}		
	else
	{	
		$image=$_FILES['img']['name'];
		echo $image;
		
		$qry=mysqli_query($con,"insert into testimony(username,message,image) 
		values('$username','$message','$image')");
		
		
		move_uploaded_file($_FILES['img']['tmp_name'],"../../images/".$_FILES['img']['name']);
		
		echo "Testimony added successfully";
	}
}
	?>
	
<form method="post" enctype="multipart/form-data">	
<table class="table table-bordered">
	<tr>
		<th>Image</th>
		<td><input type="file" name="img" class="form-control"/></td>
	</tr>
	
	<tr>	
		<th>Message</th>
		<td><input type="text" name="message" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Username</th>
		<td><input type="text" name="username" class="form-control"/>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Add Testimony" name="add"/>
		</td>
	</tr>
	
</table> 
</form>