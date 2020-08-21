<?php
error_reporting(1);
$qry=mysqli_query($con,"select * from user where email='$user'");
$result=mysqli_fetch_assoc($qry);

$oldimg=$result['id_image'];

if(isset($update))
{
	
	$img=$_FILES['image']['name'];
	if($img=="")
	{
	$qry=mysqli_query($con,"update user set name='$name', mobile='$mobile', country='$country',state='$state'  where email='$user' ");	
	}
	else
	{
	$qry=mysqli_query($con,"update user set name='$name', mobile='$mobile', id_image='$img', country='$country',state='$state'  where email='$user' ");	
	
	unlink("../../images/user/$user/$oldimg");
	move_uploaded_file($_FILES['image']['tmp_name'],"../../images/user/$user/".$_FILES['image']['name']);	
	
	header('location:index.php?option=update_profile');	
	
	}
	
}
?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>
		<th>Name</th>
		<td><input type="text" name="name" value="<?php echo $result['name'];?>" /></td>
	</tr>
	<tr>	
		<th>Mobile</th>
		<td><input type="text" name="mobile" value="<?php echo $result['mobile'];?>"/></td>
	</tr>
		
	<tr>
		<th>Profile Image</th>
		<td>
		<input type="file" name="image" />
		<img width="100px" height="100px" src="../../images/user/<?php echo $result['email']."/".$result['id_image'];?>"/>
		</td>
		
	</tr>
	<tr>
		<th>Country</th>
		<td>
		<select name="country">
					<option <?php if($result['country']=="INDIA"){echo "selected";}?>>INDIA</option>
					<option <?php if($result['country']=="USA"){echo "selected";}?>>USA</option>
					<option <?php if($result['country']=="ITALY"){echo "selected";}?>>ITALY</option>
					<option <?php if($result['country']=="CHINA"){echo "selected";}?>>CHINA</option>
					<option <?php if($result['country']=="JAPAN"){echo "selected";}?>>JAPAN</option>
					<option <?php if($result['country']=="NEPAL"){echo "selected";}?>>NEPAL</option>
					<option <?php if($result['country']=="SRI LANKA"){echo "selected";}?>>SRI LANKA</option>
					<option <?php if($result['country']=="Other"){echo "selected";}?>>Other</option>
		</select>
		</td>
	</tr>
	<tr>
		<th>State</th>
		  <td>  <select  name="state">
					
					<option <?php if($result['state']=="U.P"){echo "selected";}?>>U.P</option>
					<option <?php if($result['state']=="Rajasthan"){echo "selected";}?>>Rajasthan</option>
					<option <?php if($result['state']=="Madhya Pradesh"){echo "selected";}?>>Madhya Pradesh</option>
					<option <?php if($result['state']=="Himachal Pradesh"){echo "selected";}?>>Himachal Pradesh</option>
					<option <?php if($result['state']=="West Bengal"){echo "selected";}?>>West Bengal</option>
					<option <?php if($result['state']=="Haryana"){echo "selected";}?>>Haryana</option>
					<option <?php if($result['state']=="Punjab"){echo "selected";}?>>Punjab</option>
					<option <?php if($result['state']=="Other"){echo "selected";}?>>Other</option>
				</select>
			</td>
	</tr>
	<tr>
		<th>Address</th>
		<td><textarea name="address"><?php echo $result['address'];?></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update" name="update"/>
		</td>
	</tr>
</table> 
</form>