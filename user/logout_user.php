<?php 
session_start();
unset($_SESSION['user_logged_in']);	
header('location:../index.php');
?>