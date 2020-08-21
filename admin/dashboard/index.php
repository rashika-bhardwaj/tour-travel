<?php
session_start();
extract($_REQUEST);
include('../../connection.php');
$admin=$_SESSION['admin_logged_in'];	
if($admin=="")
{
	header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Welcome <?php echo $admin; ?></a>

   

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li>
        <a class="btn btn-danger" href="../logout.php">Logout</a>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?option=update_password">
          <i class="fas fa-fw fa-folder"></i>
          <span>Update Password</span>
        </a>        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?option=package">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Package</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="index.php?option=testimonial">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Testimony</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?option=hotel">
          <i class="fas fa-fw fa-table"></i>
          <span>Hotel</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="index.php?option=user">
          <i class="fas fa-fw fa-table"></i>
          <span>User</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
  <!--      <ol class="breadcrumb">
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
	if($opt=="feedback")
	{
	include('../feedback.php');	
	}
	else if($opt=="update_password")
	{
	include('../update_password.php');	
	}
	else if($opt=="testimonial")
	{
	include('../testimonial.php');	
	}
	else if($opt=="add_testimonial")
	{
	include('../add_testimonial.php');
	}
	else if($opt=="delete_testimonial")
	{
	include('../deletetestimonial.php');	
	}
	else if($opt=="package")
	{
	include('../package.php');	
	}
	else if($opt=="update_package")
	{
	include('../updatepackage.php');	
	}
	else if($opt=="delete_package")
	{
	include('../deletepackage.php');	
	}
	else if($opt=="add_package")
	{
	include('../addpackage.php');	
	}
	else if($opt=="hotel")
	{
	include('../hotel.php');	
	}
	else if($opt=="update_hotel")
	{
	include('../updatehotel.php');	
	}
	else if($opt=="delete_hotel")
	{
	include('../deletehotel.php');	
	}
	else if($opt=="add_hotel")
	{
	include('../addhotel.php');	
	}
	else if($opt=="user")
	{
	include('../userprofile.php');	
	}
	else if($opt=="delete_user")
	{
	include('../deleteuser.php');	
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
