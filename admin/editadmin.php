<?php 
	 $id = $_GET['id'];

	 include '../inc/dbcon.php';

	 $sql = "SELECT * FROM admin WHERE admin_id = '$id'";
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
					<div id="main" class="col-md-10">

						<!-- row -->
						<div class="row">
							<h3 align="center">Edit Admin</h3>
							<hr>
							<form action="" method="POST">
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" type="text" name="admin_name" required="1" value="<?php echo $result['admin_name']; ?>">
								</div>
								<div class="form-group">
									<label>Blood</label>
									<select class="form-control" name="admin_blood" required="1" value="<?php echo $result['admin_blood']; ?>">			
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
									<label>Gender</label>
									<select  required="1" class="form-control" name="admin_gender" value="<?php echo $result['admin_gender']; ?>">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="form-group">
									<label>Date of Birth</label>
									<input  required="1" class="form-control" type="date" name="admin_birth" value="<?php echo $result['admin_birth']; ?>">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input  required="1" class="form-control" type="text" name="admin_phone" value="<?php echo $result['admin_phone']; ?>">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input  required="1" class="form-control" type="text" name="admin_address" value="<?php echo $result['admin_address']; ?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="admin_email" value="<?php echo $result['admin_email']; ?>">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input  required="1" class="form-control" type="password" name="admin_password" value="<?php echo $result['admin_password']; ?>">
								</div>
								<div class="form-group">
									<button class="btn btn-info" name="update">Update</button>
								</div>
							</form>

							<?php 
								if (isset($_POST['update'])) {
									# code...
									$admin_name = $_POST['admin_name'];
									$admin_blood = $_POST['admin_blood'];
									$admin_gender = $_POST['admin_gender'];
									$admin_birth = $_POST['admin_birth'];
									$admin_phone = $_POST['admin_phone'];
									$admin_address = $_POST['admin_address'];
									$admin_email = $_POST['admin_email'];
									$admin_password = $_POST['admin_password'];

									$sql = "UPDATE admin SET admin_name='$admin_name',admin_blood='$admin_blood',admin_gender='$admin_gender',admin_birth='$admin_birth',admin_phone='$admin_phone',admin_address='$admin_address',admin_email='$admin_email',admin_password='$admin_password' WHERE admin_id = '$id'";
									$run = mysqli_query($con,$sql);

									if($run == true){
										echo "<script>
											alert('Update Successfully');
											window.open('viewadmin.php','_self');
										</script>";
									}else{
										echo "<script>
											alert('Update Failed');
											window.open('makeadmin.php','_self');
										</script>";
										}
									}

							 ?>
						</div>
						<!-- /row -->


					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-2">

						<!-- search widget -->
						<div class="widget search-widget">
							<form>
								<input class="input" type="text" name="search">
								<button><i class="fa fa-search"></i></button>
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
