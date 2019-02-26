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

<!-- admin signup form -->
<div class="sign-up">
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1 class="display-5 text-center">Sign Up</h1>
				<form method="POST" action="adminsign.php">

				  <div class="form-group">
				    <label>User name</label>
				    <input type="text" class="form-control" name="mname" placeholder="Enter name">
				  </div>	
				  <div class="form-group">
				    <label>Email address</label>
				    <input type="email" class="form-control" name="email" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>

				  <div class="form-group">
				    <label>Username</label>
				    <input type="text" class="form-control" name="uname" placeholder="Enter UserName">
				  </div>

				  <div class="form-group">
				    <label>Password</label>
				    <input type="password" class="form-control" name="pass" placeholder="Password">
				  </div>
				  <div class="form-check">
				  </div>
				  <div class="text-center mt-4">
				  	<input type="submit" name="signup" class="btn btn-primary" value="Submit">
					  <!-- <button type="submit" class="btn btn-primary ">Submit</button> -->
				  </div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>
<!-- admin signup form  end -->

	<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


<?php

$myname=0;
$email = 0;
$username=0;
$password= 0;
include ('../dbcon.php');

if(isset($_POST['signup'])){


	
	$myname = $_POST['mname'];
	$email = $_POST['email'];
	$username = $_POST['uname'];
	$password = $_POST['pass'];
}
// echo"yahan tak run ";
// echo $name;


$query = "INSERT INTO admin (name, email, username, password) VALUES ('$myname', '$email', '$username', '$password')";

$run = mysqli_query($con,$query);

if($run == true){
	?>

	<script type="text/javascript">
		alert("data inserted successfully");
	</script>

	<?php
} else{
	echo" query not fire ";
}

?>