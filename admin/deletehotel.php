<?php
$pid=$_GET['pid'];
$sql=mysqli_query($con,"select * from hotel where id='$id'");
$data=mysqli_fetch_assoc($sql);
$name=$data['name'];
$img=$data['image'];

//delete image2wbmp
unlink("../images/$name/$img");

//delete folder
rmdir("../images/$name");


mysqli_query($con,"delete from hotel where id='$id'");
header('location:index.php?option=hotel');
?>