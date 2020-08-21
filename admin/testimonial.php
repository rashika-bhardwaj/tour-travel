<script>
	function delSlider(id)
	{
		if(confirm("You want to delete this Slider ?"))
		{
		window.location.href='delete_slider.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered">
	<tr>
	<td colspan="9"><a href="index.php?option=add_testimonial" class="btn btn-primary">Add New</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>Username</th>
		<th>Message</th>
		<th>Image</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from testimony");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$img=$res['image'];
$path="../../images/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['username']; ?></td>
		<td><?php echo $res['message']; ?></td>
		<td><img src="<?php echo $path;?>" width="50" height="50"/></td>
		<td><a href="index.php?option=delete_testimonial&id=<?php echo $id; ?>" onclick="delSlider('<?php echo $id; ?>')">Delete<span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>
<?php 	
}
?>	
	
</table>