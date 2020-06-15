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
						<a href="index.php">
							<h1>Blood<span style="color: red;">Bank</span></h1>
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
						<li><a href="adminindex.php">Home</a></li>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="../logout.php">Logout</a></li>
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
							<h3 align="center">Registration Form</h3>
							<hr>
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label>Name</label>
									<input required="1" class="form-control" type="text" name="donar_name">
								</div>
								<div class="form-group">
									<label>Date of Birth</label>
									<input required="1" class="form-control" type="date" name="donar_birth">
								</div>
								<div class="form-group">
									<label>Gender</label>
									<select required="1" class="form-control" name="donar_gender">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="form-group">
									<label>Blood</label>
									<select required="1" class="form-control" name="donar_blood">
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
									<input required="1" class="form-control" type="text" name="donar_phone">
								</div>
								<div class="form-group">
									<label>address</label>
									<input required="1" class="form-control" type="text" name="donar_address">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input required="1" class="form-control" type="password" name="donar_password">
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									<input required="1" class="form-control" type="password" name="donar_confirm_password">
								</div>
								<span>
									<div class="form-group">
										<label>Upload Your Image</label>
										<input type="file" name="donar_image">
									</div>
								</span>
								<br>
								<div>
									<input class="btn btn-success btn-lg" type="submit" name="submit" value="Registration Submit">
								</div>
							</form>
						</div>
						<!-- /row -->


<?php 

	if(isset($_POST['submit'])){
		$donar_name = $_POST['donar_name'];
		$donar_birth = $_POST['donar_birth'];
		$donar_gender = $_POST['donar_gender'];
		$donar_blood = $_POST['donar_blood'];
		$donar_phone = $_POST['donar_phone'];
		$donar_address = $_POST['donar_address'];
		$donar_password = $_POST['donar_password'];
		$donar_confirm_password = $_POST['donar_confirm_password'];
		$donar_image = $_FILES['donar_image']['name'];
		$tmp = $_FILES['donar_image']['tmp_name'];

		$upload_path = '../upload/donar_image/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$donar_image);
		if(!$upload_check){
			echo "<script>
				alert('Image Uploaded Failed');
				window.open('adddonar_1.php','_self');
			</script>";
		}

		include '../inc/dbcon.php';

		$sql = "INSERT INTO blood_donator (donar_name,donar_birth,donar_gender,donar_blood,donar_phone,donar_address,donar_password,donar_confirm_password,donar_image) VALUES ('$donar_name','$donar_birth','$donar_gender','$donar_blood','$donar_phone','$donar_address','$donar_password','$donar_confirm_password','$donar_image')";

		$run = mysqli_query($con,$sql);

		if($run == true){
			echo "<script>
				alert('Registration Submited Successfully');
				window.open('dashboard.php','_self');
			</script>";
		}else{
			echo "<script>
				alert('Registration Submited Failed');
				window.open('adddonar_1.php','_self');
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
							<a href="index.php">
								<h3>Blood<span style="color: red">Bank</span></h3>
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="adminindex.php">Home</a></li>
							<li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="../logout.php">Logout</a></li>
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
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright" align="center">
							<span>&copy; Copyright 2018 <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Rakib Alom</a></span>
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
