<?php
$pid=$_GET['pid'];
$sql=mysqli_query($con,"select * from package where id='$pid'");
$data=mysqli_fetch_assoc($sql);
$pname=$data['package_name'];
$img=$data['image'];

//delete image2wbmp
unlink("../images/$pname/$img");

//delete folder
rmdir("../images/$pname");


mysqli_query($con,"delete from package where id='$pid'");
header('location:index.php?option=package');
?>