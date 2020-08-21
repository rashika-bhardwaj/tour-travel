<?php
if(isset($update))
{
	$qry=mysqli_query($con,"select * from user where email='$user' && password='$op'");
	if(mysqli_num_rows($qry))
	{
		if($np==$cp)
		{
			mysqli_query($con,"update user set password='$np' where email='$user'");
			echo "<h3 style='color:red'>Password updated successfully</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>New password and Confirm Password doesn't match</h3>";
		}
	}
	else
	{
		echo "<h3 style='color:red'>Incorrect Old Password</h3>";
	}
}
?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	<tr style="height:40">
		<th>Enter Your old Password</th>
		<td><input type="password" name="op" class="form-control"/></td>
	</tr>
	
	<tr>	
		<th>Enter Your New Password</th>
		<td><input type="password" name="np" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Enter Your Confirm Password</th>
		<td><input type="password" name="cp" class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update Password" name="update"/>
		</td>
	</tr>
</table> 
</form>