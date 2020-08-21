<?php
define('HOSTNAME','localhost');
define('USER','root');
define('PASS','');
define('DATABASE','project_tour');
$con=mysqli_connect(HOSTNAME,USER,PASS,DATABASE) or die('DATABASE connection failed.');
?>