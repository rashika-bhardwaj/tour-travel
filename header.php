<?php 
session_start();
error_reporting(1);
$user=$_SESSION['user_logged_in'];
?>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Tour & Travel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="tour.php" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="hotel.php" class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <?php 
		  if($user=="")
		  {
		  ?>
		  <li class="nav-item cta"><a href="login.php" class="nav-link"><span>LogIn</span></a></li>
		  <li class="nav-item cta"><a href="registration.php" class="nav-link"><span>Registration</span></a></li>
		  <?php } else {?>
		  
		  <li class="nav-item cta"><a href="logout.php" class="nav-link"><span>Logout</span></a></li>
		  <li class="nav-item cta"><a href="user/dashboard/index.php" class="nav-link"><span>Dashboard</span></a></li>
		  <?php } ?>
		</ul>
      </div>
    </div>
  </nav>