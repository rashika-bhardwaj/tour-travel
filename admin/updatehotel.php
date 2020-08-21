<?php
//$pid=$_GET['pid'];
$qry=mysqli_query($con,"select * from hotel where id='$id'");
$result=mysqli_fetch_assoc($qry);
$name=$result['name'];
$oldimg=$result['image'];
if(isset($update))
{
	$img=$_FILES['image']['name'];
	if($img=="")
	{
	$qry=mysqli_query($con,"update hotel set name='$name', address='$address',details='$details',rating='$rating', price='$price' where id='$id' ");	
	}
	else
	{
	$qry=mysqli_query($con,"update hotel set name='$name', image='$img', address='$address', details='$details', rating='$rating', price='$price'  where id='$id' ");
	unlink("../images/$name/$oldimg");
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/$name/".$_FILES['image']['name']);
	}
	if($qry)
	{
	header('location:index.php?option=hotel');	
	//echo "hotel updated";		
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
		<td><input type="text" readonly="readonly" name="name" value="<?php echo $result['name'];?>" /></td>
	</tr>
	<tr>
		<th>Images</th>
		<td>
		<input type="file" name="image" />
		<img width="100px" height="100px" src="../images/<?php echo $result['name']."/".$result['image'];?>"/>
		</td>
	</tr>
	
	<tr>	
		<th>Address</th>
		<td><textarea type="text" name="address" /><?php echo $result['address'];?></textarea></td>
	</tr>
	<tr>
		<th>Deails</th>
		<td><input type="text" name="details" value="<?php echo $result['details'];?>"/></td>
	</tr>
	<tr>
		<th>Rating</th>
		<td><input type="text" name="rating" value="<?php echo $result['rating'];?>"/></td>
	</tr>
	<tr>
		<th>Price</th>
		<td><input type="text" name="price" value="<?php echo $result['price'];?>"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update" name="update"/>
		</td>
	</tr>
</table> 
</form>