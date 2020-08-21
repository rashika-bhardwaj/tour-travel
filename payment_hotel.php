<?php 
session_start();
error_reporting(1);
$user=$_SESSION['user_logged_in'];
if($user=="")
{
header('location:login.php');	
}

//error_reporting(1);
include('connection.php');
extract($_REQUEST);
if(isset($pay))
{
	$query=mysqli_query($con,"select * from booked_hotel where email='$user' order by id desc limit 1");
	
	$res=mysqli_fetch_assoc($query);
	
	$id=$res['id'];

	$sql1=mysqli_query($con,"update booked_hotel set payment_mode='$payments' where id='$id' ");

	if($sql1)
	{
	header('location:user/dashboard/index.php?option=booking_hotel');	
	}
	else
	{
	$error= "<h3 style='color:red'>Invalid login details$payments $id</h3>";	
	}

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	<?php include('header.php');?>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Book Now </span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Book Now</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        
		<?php echo @$error; ?><br>
		  <div class="row block-9">
          
		  <div class="col-md-6 pr-md-5">
            <form method="post">
              			  
			<div class="form-group">
                Cash on Check in Time	<input type="radio"  name="payments" value="cash" />
				Dibit/Credit/Net Banking<input type="radio"  name="payments" value="Online Banking"/>
				Paypal					<input type="radio"  name="payments" value="Paypal" />
			</div>
			  
            <div class="form-group">
                <input type="submit" value="Pay Now" name="pay" class="btn btn-primary py-3 px-5">
			</div>
            </form>
          
          </div>

          
        </div>
      </div>
    </section>


    <?php include('footer.php');?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>