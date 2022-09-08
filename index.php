<!DOCTYPE html>
<html>
<head>
	<title>Web</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<script type="text/javascript">
		$(document).ready(function ()
		{
		
		});
	</script>
	<style type="text/css">
		.modal-header
		{
			background-color:green;
			color:white;
		}
	</style>
</head>
<body>
	<!-- This is a navbar -->
		<nav class="navbar navbar-expand-xl">
			<div class="nav">
				<div class="logo">
					<h2>Logo</h2>
				</div>
				<div class="searchbox">
					<form>
						<input type="text" name=""><span><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></span>
					</form>
				</div>
				<button type="button" class="toggle">
					<span class="icon"></span>
				</button>
				<div class="menu">
					<ul class="active">
						<li>Home</li>
						<li>Menu</li>
						<li>About us</li>
						<li>Photo</li>
						<li>Reviews</li>
						<li>Payeasy</li>
					</ul>
				</div>
<div class="loginbtn">
<button type="button" class="btn">
  Log In
</button>
<button type="button" class="btn">
  Sign up
</button>
</div>
</div>
</nav>
<!-- login form  -->
<div class="login">
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" style="color:white;"class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="logincode.php" method="post">
      <div class="modal-body">
        <div class="form-group">
        	<label>Email</label>
        	<input type="text" name="email" class="form-control" placeholder="enter your username/email/mobile">
        </div>
        <div class="form-group">
        	<label>Password</label>
        	<input type="text" name="email" class="form-control" placeholder="password">
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Log In</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Modal -->
<!--  Registration  form  -->
<div class="signup">
	<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" style="color:white;"class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<form action="insertdata.php" method="post" id="form">
      <div class="modal-body">
        <div class="form-group">
        	<label>Enter your name</label>
        	<input type="text" name="name"  id="name"class="form-control" placeholder="enter your name">
        </div>
        <div class="form-group">
        	<label>Email</label>
        	<input type="text" name="email"   id="email" class="form-control" placeholder="enter your email">
        </div>
        <div class="form-group">
        	<label>Mobile no</label>
        	<input type="text" name="mobile"   id="mobile"class="form-control" placeholder="enter your mobile no">
        </div>
        <div class="form-group">
        	<label>Password</label>
        	<input type="text" name="password"  id="password" class="form-control" placeholder="enter your password">
        </div>
        <div class="form-group">
        	<label>Gender</label><br>
        	Male <input type="radio" name="sex" class="sex" value="male">
        	<br>
        	Female <input type="radio" name="sex" class="sex" value="female">
        	<br>
        	Other <input type="radio" name="sex" class="sex" value="other">
        </div>
			</div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="sub" class="btn btn-primary">Submit</button>
      	</div>
      </form>
    </div>
  </div>
</div>

				</div>
	
	<!-- Button trigger modal -->

<!-- Modal -->
<!--This is a slide image -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active" style="width:100%;height:auto;">
      <img class="d-block w-100" src="Image/photo3.jpeg" width="100%" height="400px" alt="First slide">
    </div>
    <div class="carousel-item" style="width:100%;height:auto;">
      <img class="d-block w-100" src="Image/photo2.jpeg" height="400px" alt="Second slide">
    </div>
    <div class="carousel-item" style="width:100%;height:auto;">
      <img class="d-block w-100" src="Image/photo1.jpeg" height="400px"alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- food list -->

<div class="container">
	<div class="row row1">
<div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="body">
				<div class="image1">
					<img src="Image/restaurantImage/pexels-jess-bailey-designs-913136.jpg" width="300px" height="200px">
				</div>
				<div class="content">
					<span>Bhel Puri</span><br>
					<span>Price <i class="fa-solid fa-indian-rupee-sign"></i> 50</span><br>
					<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star-half-stroke"></i>
						</span>
				</div>	
				</div>
				</div>
<div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="body">
				<div class="image1">
					<img src="Image/restaurantImage/pexels-rajesh-tp-1633578 (1).jpg" width="300px" height="200px">
				</div>
				<div class="content">
					<span>Burger</span><br>
					<span>Price <i class="fa-solid fa-indian-rupee-sign"></i> 50</span><br>
					<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star-half-stroke"></i>
						</span>
				</div>	
				</div>
				

				</div>
						
			
				
			<div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="body">
				<div class="image1">
					<img src="Image/restaurantImage/pexels-lisa-fotios-1279330.jpg" width="300px" height="200px">
				</div>
				<div class="content">
					<span>Chaumeen</span><br>
					<span>Price <i class="fa-solid fa-indian-rupee-sign"></i> 50</span><br>
					<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star-half-stroke"></i>
						</span>
				</div>	
				</div>
				

				</div>
							
			</div>		
		
		
<!-- food list 2 -->
<div class="row row2">
<div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
			<div class="body">
				<div class="image1">
					<img src="Image/restaurantImage/pexels-marvin-ozz-2474658.jpg" width="300px" height="200px">
				</div>
				<div class="content">
					<span>Samosa</span><br>
					<span>Price <i class="fa-solid fa-indian-rupee-sign"></i> 25</span><br>
					<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star-half-stroke"></i>
						</span>
				</div>	
				</div>
			</div>
			<div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="body">
				<div class="image1">
					<img src="Image/restaurantImage/pexels-marvin-ozz-2474661.jpg" width="300px" height="200px">
				</div>
				<div class="content">
					<span>Sabji and Tanduri Roti</span><br>
					<span>Price <i class="fa-solid fa-indian-rupee-sign"></i> 40</span><br>
					<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star-half-stroke"></i>
						</span>
				</div>	
				</div>
				

			
				</div>
			
	<div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="body">
				<div class="image1">
					<img src="Image/restaurantImage/pexels-pixabay-315755.jpg" width="300px" height="200px">
				</div>
				<div class="content">
					<span>Pizza</span><br>
					<span>Price <i class="fa-solid fa-indian-rupee-sign"></i> 50</span><br>
					<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star-half-stroke"></i>
						</span>
				</div>	
				</div>
				</div>	
				</div>
			<!-- Food list 3-->
<div class="row row3">
	<div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="body">
				<div class="image1">
					<img src="Image/restaurantImage/sambar-rice-sambar-sadam-one-pot-meal-from-south-indian-state-tamil-nadu-kerala_466689-75220.jpg" width="300px" height="200px">
				</div>
				<div class="content">
					<span>Sambhar Rice South Indian Food famuse</span><br>
					<span>Price <i class="fa-solid fa-indian-rupee-sign"></i> 50</span><br>
					<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star-half-stroke"></i>
						</span>
				</div>	
				</div>
				</div>
<div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="body">
				<div class="image1">
					<img src="Image/restaurantImage/pexels-pixabay-461198.jpg"  width="300px" height="200px">
				</div>
				<div class="content">
					<span>Bhel Puri</span><br>
					<span>Price <i class="fa-solid fa-indian-rupee-sign"></i> 50</span><br>
					<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star-half-stroke"></i>
						</span>
						</div>
						</div>
				</div>
				<div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<div class="body">
				<div class="image1">
					<img src="Image/restaurantImage/pexels-tim-samuel-5835353.jpg" width="300px" height="200px">
				</div>
				<div class="content">
					<span>Bhel Puri</span><br>
					<span>Price <i class="fa-solid fa-indian-rupee-sign"></i> 50</span><br>
					<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star"></i></span>
						<span><i class="fa-solid fa-star-half-stroke"></i>
						</span>
				</div>	
				</div>
			</div>		
				</div>
				</div>

<!--Footer bar -->
<div class="footer">

		<div class="footerrow">
			<div class="col">
				<h5>About Us</h5>
				<ul>
					<li>Home</li>
					<li>Service</li>
					<li>About us</li>
					<li>Contact us</li>
				</ul>
			</div>
			<div class="col">
				<ul>
					<li><h5>Locate & Connect</h5></li>
					<li>Home</li>
					<li>Service</li>
					<li>About us</li>
					<li>Contact us</li>
				</ul>
			</div>
			<div class="col">
				
				<form>
				<ul>
					<li><h5>Comment</h5></li>
					<li><input type="text" name="name" placeholder="Name"></li>
					<li><input type="text" name="name" placeholder="Email"></li>
					<li><textarea type="textarea" cols="18" ></textarea></li>
					<li><input type="submit" name="submit" value="Send"></li>
				</ul>
				</form>
			</div>
			<div class="col">
			
				<ul>
					<li>	<h5>Connect with Us</h5></li>
					<li><i class="fa-brands fa-facebook"></i></li>
					<li><i class="fa-brands fa-instagram"></i></li>
					<li><i class="fa-brands fa-twitter"></i></li>
					<li><i class="fa-brands fa-linkedin-in"></i></li>
				</ul>
			</div>
		</div>
</div>
<div class="lastfooter">
<p>&copy; 2022 designed by R K </p>	
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>