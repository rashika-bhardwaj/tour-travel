<?php
include('connection.php');
extract($_REQUEST);
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
	<link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	<?php include('header.php');?>
    <!-- END nav -->
<?php 
error_reporting(1);
if(isset($registration))
{
	$query=mysqli_query($con,"select * from user where email='$email' ");
	if(mysqli_num_rows($query))
	{
		$msg= "<h1 style='color:red'>This email already used</h1>";	
	}
	else
	{
		$image=$_FILES['image']['name'];
			
		$que=mysqli_query($con,"insert into user values('','$name','$email','$mobile','$password','$id_proof','$image','$country_id','$state_id','$address')");
		if($que)
		{
		mkdir("images/user/$email");
		move_uploaded_file($_FILES['image']['tmp_name'],"images/user/$email/".$_FILES['image']['name']);	
		$msg= "<h1 style='color:white'>Congreates you  have created your account successfully</h1>";
		header('location:login.php');	
	}
	}

}
?>		

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Registration</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Registration</h1>
          </div>
        </div>
      </div>
    </div>

     		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
 <script>
	function dispCity(str)
	{
		alert(str);
	
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
	{
	//alert(this.responseText);	
    document.getElementById("disp_state").innerHTML = this.responseText;
    }
  };
	xmlhttp.open("GET", "show_city.php?str="+str, true);
	xmlhttp.send();
  
  
 
}
	</script>
        </div>
        <div class="row block-9">
          <div class="col-md-12 pr-md-12">
            <?php echo @$msg; ?>
			
			<form method="post" enctype="multipart/form-data">
			
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="mobile" placeholder="Mobile Number" required>
              </div>
			  
			  <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
			  
			  
			  <div class="form-group">
                <input type="file" class="form-control" name="image" title="Profile" required>
              </div>
			  
              
				<div class="form-group">
                <select onchange="dispCity(this.value)" class="form-control" name="country_id" required>
					<option value="" selected="selected" disabled="disabled">Choose Country</option>
					<?php 
					$sql=mysqli_query($con,"select * from country");
					while($res=mysqli_fetch_assoc($sql))
					{
					$cid=$res['id'];	
					echo "<option value='$cid'>".$res['name']."</option>";
					}
					?>
				</select>
				
              </div>
			  <div class="form-group" id="disp_state">
                <select class="form-control" name="state_id">
					<option>Choose State</option>
				</select>
              </div>
			<div class="form-group">
          <textarea name="address" id="" cols="30" rows="7" name="address" class="form-control" placeholder="Address" required>
		  </textarea>
				</div>
			<div class="form-group">
                <input type="submit" value="Registration" name="registration" class="btn btn-primary py-3 px-5">
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>















		
