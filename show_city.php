<?php 
include('connection.php');
$tb=$_GET['str'];


$sql=mysqli_query($con,"select * from state where country_id='$tb' "); 
echo '<select name="state_id"   class="form-control">';
while($row=mysqli_fetch_assoc($sql))
{
echo "<option>".$row['state']."</option>";	
}
echo "</select>";

?>	


	