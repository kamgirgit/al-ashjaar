<!DOCTYPE html>
<html>
<head>
	<title>alAshjaar pvt ltd</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body>
	<!-- header -->
<section class="header">
	<div class="container">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-dark">
				  <a class="navbar-brand" href="#"> <img src="images/sufiana-white.png" alt=""></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">About Us</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Our Clients</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Current openings</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Walk-in Interview</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">FAQs</a>
				      </li>
				      <!-- <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Dropdown
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li> -->
				    </ul>
				  </div>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- header end -->

<!-- slider -->
<section class="home-slider">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="images/bg-1.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/bg-2.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/bg-3.jpg" alt="Third slide">
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
</section>
<!-- slider end -->

<!-- about us -->
<section class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="about-img">
							<img src="images/about-1.jpg" class="img-fluid" alt="">
						</div>
						<div class="about-img">
							<img src="images/about-2.jpg" class="img-fluid" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-img">
							<img src="images/about-3.jpg" class="img-fluid" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</section>
<!-- about us end -->
	<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




<?php
include ('dbcon.php');
if(isset($_POST['login'])){

$username = $_POST['uname'];
$password = $_POST['pass'];

	$qry = "SELECT * FROM `admin` WHERE username='$username' AND password= '$password';" ;

	$run = mysqli_query($con, $qry);
	$row = mysqli_num_rows($run);
	if($row < 1){

		?>
		<script>alert("Username or password not match !!!") ;
		window.open('login.php', '_self');

	</script>

		<?php
	}
	else{
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		echo "id is " .$id;
	}
}
?>