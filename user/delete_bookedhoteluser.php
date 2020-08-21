<?php
//$pid=$_GET['pid'];
$sql=mysqli_query($con,"select * from booked_hotel where id='$id'");
$data=mysqli_fetch_assoc($sql);

mysqli_query($con,"delete from booked_hotel where id='$id'");
header('location:index.php?option=booking_hotel');
?>