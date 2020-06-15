<?php

	$id = $_GET['id'];

	include '../inc/dbcon.php';

	$sql = "SELECT * FROM blood_donator WHERE donar_id = '$id'";

	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>HTML Education Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html">
							<img src="./img/logo.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="adddonar.php">Registration</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- row -->
						<div class="row">
							<h3 align="center">Edit Donar Account</h3>
							<hr>
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label>Name</label>
									<input required="1" class="form-control" type="text" name="donar_name" value="<?php echo $result['donar_name'] ?>">
								</div>
								<div class="form-group">
									<label>Date of Birth</label>
									<input required="1" class="form-control" type="date" name="donar_birth" value="<?php echo $result['donar_birth'] ?>">
								</div>
								<div class="form-group">
									<label>Gender</label>
									<select required="1" class="form-control" name="donar_gender"  value="<?php echo $result['donar_gender'] ?>">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="form-group">
									<label>Blood</label>
									<select required="1" class="form-control" name="donar_blood"  value="<?php echo $result['donar_blood'] ?>">
										<option>select your blood group</option>
										<option>A(+)</option>
										<option>A(-)</option>
										<option>B(+)</option>
										<option>B(-)</option>
										<option>O(+)</option>
										<option>O(-)</option>
										<option>AB(+)</option>
										<option>AB(-)</option>
									</select>
								</div>
								<div class="form-group">
									<label>Phone Number</label>
									<input required="1" class="form-control" type="text" name="donar_phone"  value="<?php echo $result['donar_phone'] ?>">
								</div>
								<div class="form-group">
									<label>address</label>
									<input required="1" class="form-control" type="text" name="donar_address"  value="<?php echo $result['donar_address'] ?>">
								</div>
								
								<br>
								<div>
									<input class="btn btn-success btn-md form-control" type="submit" name="update" value="Update">
								</div>
							</form>
						</div>
						<!-- /row -->


<?php 

	if(isset($_POST['update'])){
		$donar_name = $_POST['donar_name'];
		$donar_birth = $_POST['donar_birth'];
		$donar_gender = $_POST['donar_gender'];
		$donar_blood = $_POST['donar_blood'];
		$donar_phone = $_POST['donar_phone'];
		$donar_address = $_POST['donar_address'];

		$sql = "UPDATE blood_donator SET donar_name='$donar_name',donar_birth='$donar_birth',donar_gender='$donar_gender',donar_blood='$donar_blood',donar_phone='$donar_phone',donar_address='$donar_address' WHERE donar_id='$id'";

		$run = mysqli_query($con,$sql);

		

		if($run == true){
			echo "<script>
				alert('Update Successfully');
				window.open('donarindex.php','_self');
			</script>";
		}else{
			echo "<script>
				alert('Update Failed');
				window.open('adddonar.php','_self');
			</script>";
		}
	}

 ?>

					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- search widget -->
						<div class="widget search-widget">
							<form action="searchdetails.php" method="POST">
								<input class="input" type="text" name="searchdata">
								<button name="search"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /search widget -->

					


						<!-- tags widget -->
						<div class="widget tags-widget">
							<h3>Tags</h3>
							<a class="tag" href="#">A(+)</a>
							<a class="tag" href="#">A(-)</a>
							<a class="tag" href="#">B(+)</a>
							<a class="tag" href="#">B(-)</a>
							<a class="tag" href="#">O(+)</a>
							<a class="tag" href="#">O(-)</a>
							<a class="tag" href="#">AB(+)</a>
							<a class="tag" href="#">AB(-)</a>
						</div>
						<!-- /tags widget -->

					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index.html">
								<img src="./img/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="registration.php">Registration</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4" align="center">
						<div class="footer-copyright">
							<span>&copy; Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>

	</body>
</html>
