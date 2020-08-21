<?php 
include('connection.php');
$tb=$_GET['str'];

//echo "Hello$tb";

$sql=mysqli_query($con,"select * from $tb"); 
echo '<select name="display_package_hotel"   class="form-control">';
while($row=mysqli_fetch_assoc($sql))
{
echo "<option>".$row['location']."</option>";	
}
echo "</select>";

?>	


	