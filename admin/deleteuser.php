<?php
//$pid=$_GET['pid'];
$sql=mysqli_query($con,"select * from user where id='$id'");
$data=mysqli_fetch_assoc($sql);
$email=$data['email'];
$img=$data['id_image'];

//delete image2wbmp
unlink("../images/user/$email/$img");

//delete folder
rmdir("../images/user/$email");


mysqli_query($con,"delete from user where id='$id'");
header('location:index.php?option=user');
?>