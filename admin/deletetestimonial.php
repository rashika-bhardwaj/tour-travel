<?php
$tid=$_GET['id'];
$sql=mysqli_query($con,"select * from testimony where id='$tid'");
$data=mysqli_fetch_assoc($sql);
$username=$data['username'];
$img=$data['image'];
$img=$data['image'];
$img=$data['image'];

//delete image2wbmp
unlink("../images/$img");


mysqli_query($con,"delete from testimony where id='$tid'");
header('location:index.php?option=testimony');
?>