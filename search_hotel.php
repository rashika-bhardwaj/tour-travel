<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tour & travel</title>
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
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Hotel</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
          </div>
        </div>
      </div>
    </div>


   <section class="ftco-section ftco-degree-bg">
      <div class="container">

          <div class="col-lg-12">
          	<div class="row">
		<?php
		extract($_REQUEST);
		if(isset($search))
		{
			//echo $hotel_name." ".$location;
			
		//$package_hotel."Name ".$display_package_hotel;
		

		//hotel search start	
		if($package_hotel=="hotel")
		{		
			$sql=mysqli_query($con,"select * from hotel where location='$display_package_hotel' ");
			$row=mysqli_num_rows($sql);
			
			if($row==0)
			{
			echo "<h1 style='text-align:center;color:red'>No any hotels found in this location</h1>";	
			}
			else
			{
				
			while($res=mysqli_fetch_assoc($sql))
			{
			
			?>
			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $res['image'];?>);">
		    						<!--<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>-->
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href=""><?php echo $res['name'];?></a></h3>
				    						<!--<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>-->
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">Rs.<?php echo $res['price'];?><br><small>/night</small></span>
		    							</div>
		    						</div>
		    						<p><?php echo $res['details'];?></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							
		    							<span class="ml-auto"><a href="book_hotel.php">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
						<?php
						}
						?>
		    			
          	</div>	
			<?php 	
			}			
		}
		//hotel search end
		
		
		
		//package search start
		
		if($package_hotel=="package")
		{		
			$sql=mysqli_query($con,"select * from package where location='$display_package_hotel' ");
			$row=mysqli_num_rows($sql);
			
			if($row==0)
			{
			echo "<h1 style='text-align:center;color:red'>No any hotels found in this location</h1>";	
			}
			else
			{
				
			while($res=mysqli_fetch_assoc($sql))
			{
			
			?>
			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $res['image'];?>);">
		    					<!--	<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>-->
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href=""><?php echo $res['name'];?></a></h3>
				    						<!--<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>-->
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">Rs.<?php echo $res['price'];?><br><small><?php echo $res['duration']?></small></span>
		    							</div>
		    						</div>
		    						<p><?php echo $res['details'];?></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							
		    							<span class="ml-auto"><a href="book_package.php">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
						<?php
						}
						?>
		    			
          	</div>	
			<?php 	
			}			
		}
		//hotel search end
		//package search end
		
			
			
			
		}
		?>
		
			
          	<!--<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>