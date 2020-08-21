<?php
$pid=$_GET['pid'];
$qry=mysqli_query($con,"select * from package where id='$pid'");
$result=mysqli_fetch_assoc($qry);

$pname=$result['package_name'];
$oldimg=$result['image'];

if(isset($update))
{
	$img=$_FILES['image']['name'];
if($img=="")
	{
	$qry=mysqli_query($con,"update package set package_name='$pname', package_type='$ptype',duration='$duration',location='$location', price='$price', details='$details'  where id='$pid' ");	
	}
	else
	{
	$qry=mysqli_query($con,"update package set package_name='$pname', package_type='$ptype',duration='$duration',location='$location', price='$price', details='$details',image='$img'  where id='$pid' ");
	
	unlink("../images/$pname/$oldimg");
	
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/$pname/".$_FILES['image']['name']);
	
	
	}
	
	
	if($qry)
	{
	header('location:index.php?option=package');	
	//echo "package updated";		
	}
	else
	{
	echo "not updated";
	}
}
?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	<tr>
		<th>Sr.No.</th>
		<td> <?php echo $result['id'];?></td>
	<tr>
	<tr>
		<th>Package Name</th>
		<td><input type="text" readonly="readonly" name="pname" value="<?php echo $result['package_name'];?>" /></td>
	</tr>
	<tr>	
		<th>Package Type</th>
		<td><input type="text" name="ptype" value="<?php echo $result['package_type'];?>"/></td>
	</tr>
	<tr>
		<th>Duration</th>
		<td><input type="text" name="duration" value="<?php echo $result['duration'];?>"/></td>
	</tr>
	<tr>
		<th>Location</th>
		<td><input type="text" name="location" value="<?php echo $result['location'];?>"/></td>
	</tr>
	<tr>
		<th>Price</th>
		<td><input type="text" name="price" value="<?php echo $result['price'];?>"/></td>
	</tr>
	<tr>
		<th>Images</th>
		<td>
		<input type="file" name="image" />
		<img width="100px" height="100px" src="../images/<?php echo $result['package_name']."/".$result['image'];?>"/>
		</td>
	</tr>
	<tr>
		<th>Details</th>
		<td><input type="text" name="details" value="<?php echo $result['details'];?>"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update" name="update"/>
		</td>
	</tr>
</table> 
</form>