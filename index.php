<?php
include('connection.php');
extract($_REQUEST);
if(isset($subscribe))
{
		mysqli_query($con,"insert into subscribe values('','$email')");
}
if(isset($submit))
{
	$image=$_FILES['image']['name'];
	mysqli_query($con,"insert into testimony(username,message,image) values('$name','$msg','$image')");
	move_uploaded_file($_FILES['image']['tmp_name'],"images/".$_FILES['image']['name']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tour & Travel</title>
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
	<script>
	function dispPackage(str)
	{
		//alert(str);
	
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
	{
	//alert(this.responseText);	
    document.getElementById("display_package_hotel").innerHTML = this.responseText;
    }
  };
	xmlhttp.open("GET", "load_details.php?str="+str, true);
	xmlhttp.send();
  
  
 
}
	</script>
  </head>
  <body>
    <?php include('header.php');?>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        
		<div class="row no-gutters slider-text js-fullheight align-items-center">
			<form method="post" action="search_hotel.php">
				
			<Div class="col-md-4 col-lg-4" style="width:40%;float:left;border:1px solid #CCC">
				<select name="package_hotel" onchange="dispPackage(this.value)" class="form-control">
					<option value="" selected="selected" disabled="disabled">Select Hotel/Packages</option>
					<option value="hotel">hotel</option>
					<option value="package">Packages</option>
				</select>
			</div>
			
			<Div class="col-md-4 col-lg-4" id="display_package_hotel" style="width:40%;float:left;border:1px solid #CCC">
				<select name="display_package_hotel"  class="form-control">
					<option value="" selected="selected" disabled="disabled">Select Hotel/Packages</option>
					<option>Hotel</option>
					<option>Packages</option>
				</select>
			</div>
			
			<Div class="col-md-4 col-lg-4" style="width:30%;float:left;border:1px solid #CCC">
				<input type="submit" value="Search" name="search" class="btn btn-success"/>
			</div>
			
			
			</form>
		</div>
		
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Price Guarantee</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Travellers Love Us</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Travel Agent</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Our Dedicated Support</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Packages</span>
            <h2 class="mb-4"><strong>Our Top </strong> Packages</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					
						
						<?php
			$sql=mysqli_query($con,"select * from package");
			while($res=mysqli_fetch_assoc($sql))
			{
			?>
						
						<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $res['image']; ?>);">
		    						
		    					</a>
		    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#"><?php echo $res['location']; ?></a></h3>
		    						
	    						</div>
	    						<div class="two">
	    							<span class="price">Rs.<?php echo $res['price']; ?></span>
    							</div>
    						</div>
    						<p><?php echo $res['details']; ?></p>
    						<p class="days"><span><?php echo $res['duration']; ?></span></p>
   						<hr>
							<p class="bottom-area d-flex">
    							<span class="ml-auto"><a href="book_package.php">Book Now</a></span>
    						</p>
		    			
						</div>
							</div>
	    				</div>
	    				
			<?php } ?>	
	    				
	    				
	    				
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Popular</strong> Hotels &amp; Rooms</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
			<?php
			$sql=mysqli_query($con,"select * from hotel");
			while($res=mysqli_fetch_assoc($sql))
			{
			
			?>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $res['image']?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#"><?php echo $res['name'];?></a></h3>
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
	    							<span class="price per-price"><?php echo $res['price']?><br><small>/night</small></span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
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
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
          	
            <h2 class="mb-4 pb-3"><strong>Write</strong>Testimony</h2>
           
			  <form method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="file" class="form-control" name="image" placeholder="image">
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" name="msg" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>

         
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
		              <?php
						$sql=mysqli_query($con,"select * from testimony");
						while($res=mysqli_fetch_assoc($sql))
						{
						?>
						<div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(images/<?php echo $res['image']; ?>)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5"><?php echo $res['message'];?></p>
		                    <p class="name"><?php echo $res['username'];?></p>
		                    <!--<span class="position">Guest from italy</span>-->
		                  </div>
		                </div>
		              </div>
					  <?php
						}
						?>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

    
    	
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="email" class="form-control" name="email" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" name="subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>