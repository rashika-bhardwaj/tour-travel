<?php
session_start();
extract($_REQUEST);
include('../../connection.php');
$user=$_SESSION['user_logged_in'];	
if($user=="")
{
	header('location:../index.php');
}
$sql=mysqli_query($con,"select * from user where email='$user'  ");
$result=mysqli_fetch_assoc($sql);
$path="../../images/user/".$user."/".$result['id_image'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Welcome <?php echo $result['name']; ?></a>

   

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
     <div class="input-group">
    <!--    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->

	<li>
        <a class="btn btn-danger" href="../../index.php">Home</a>
      </li>
	
	<li>
        
      </li>
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li>
        <a class="btn btn-danger" href="../logout_user.php">Logout</a>
      </li>
    </ul>
	<ul class="navbar-nav ml-auto ml-md-0">
      
      

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <img src="<?php echo $path; ?>" width="100px" height="100px"/>
        </a>
      </li>
	  
	  <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?option=update_profile">
          <i class="fas fa-fw fa-table"></i>
          <span>Update Profile</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?option=update_password">
          <i class="fas fa-fw fa-folder"></i>
          <span>Update Password</span>
        </a>        
      </li>
    
	<li class="nav-item">
        <a class="nav-link" href="index.php?option=booking_package">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Booked Package</span></a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="index.php?option=booking_hotel">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Booked Hotel</span></a>
      </li>
	
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
       <!-- <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
		-->

<?php 
@$opt=$_GET['option'];

if($opt=="")
{
include('../reports.php');	
}
else
{
	if($opt=="update_password")
	{
	include('../update_password.php');	
	}
	else if($opt=="profile")
	{
	include('../userprofile.php');	
	}
	else if($opt=="update_profile")
	{
	include('../updateprofile.php');	
	}
	else if($opt=="booking_package")
	{
	include('../booked_package_user.php');	
	}
	else if($opt=="delete_booking")
	{
	include('../delete_bookedpackage_user.php');	
	}
	else if($opt=="booking_hotel")
	{
	include('../booked_hotel_user.php');	
	}
	else if($opt=="delete_bookedhotel")
	{
	include('../delete_bookedhoteluser.php');	
	}
}
?>

		
		
        </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

	  </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
