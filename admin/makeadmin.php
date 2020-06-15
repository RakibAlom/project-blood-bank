<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Online Blood Bank | Registration Form</title>

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
							<h3 align="center">Make New Admin</h3>
							<hr>
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" type="text" name="admin_name" required="1">
								</div>
								<div class="form-group">
									<label>Blood</label>
									<select class="form-control" name="admin_blood" required="1">
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
									<label>Gender</label>
									<select  required="1" class="form-control" name="admin_gender">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="form-group">
									<label>Date of Birth</label>
									<input  required="1" class="form-control" type="date" name="admin_birth">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input  required="1" class="form-control" type="text" name="admin_phone">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input  required="1" class="form-control" type="text" name="admin_address">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="admin_email">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input  required="1" class="form-control" type="password" name="admin_password">
								</div>
								<div class="form-group">
									<label>Upload Your Image</label>
									<input type="file" name="admin_image">
								</div>
								<div class="form-group">
									<button class="btn btn-info" name="make">Make Admin</button>
								</div>
							</form>
							
							
						</div>
						<!-- /row -->

<?php 
	if (isset($_POST['make'])) {
		# code...
		$admin_name = $_POST['admin_name'];
		$admin_blood = $_POST['admin_blood'];
		$admin_gender = $_POST['admin_gender'];
		$admin_birth = $_POST['admin_birth'];
		$admin_phone = $_POST['admin_phone'];
		$admin_address = $_POST['admin_address'];
		$admin_email = $_POST['admin_email'];
		$admin_password = $_POST['admin_password'];
		$admin_image = $_FILES['admin_image']['name'];
		$tmp = $_FILES['admin_image']['tmp_name'];

		$upload_path = '../upload/admin_image/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$admin_image);
		if (!$upload_check) {
			# code...
			echo "<script> 
			alert('Image Uploaded Failed');
			window.open('makeadmin.php','_self');
			</script>";
		}

		include '../inc/dbcon.php';

		$sql = "INSERT INTO admin (admin_name,admin_blood,admin_gender,admin_birth,admin_phone,admin_address,admin_email,admin_password,admin_image) VALUES ('$admin_name','$admin_blood','$admin_gender','$admin_birth','$admin_phone','$admin_address','$admin_email','$admin_password','$admin_image')";

		$run = mysqli_query($con,$sql);

		if ($run == true) {
			# code...
			echo "<script>
			alert('Make Admin Successfully');
			window.open('viewadmin.php','_self');
			</script>";
		}else{
			echo "<script> 
			alert('Admin Make Failed');
			window.open('makeadmin.php','_self');
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

<?php include '../inc/adminfooter.php'; ?>