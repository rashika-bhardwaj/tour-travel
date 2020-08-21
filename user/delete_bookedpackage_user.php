<?php
$pid=$_GET['pid'];
$sql=mysqli_query($con,"select * from booked_package where id='$pid'");
$data=mysqli_fetch_assoc($sql);

mysqli_query($con,"delete from booked_package where id='$pid'");
header('location:index.php?option=booking_package');
?>