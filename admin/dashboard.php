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
							<h3 align="center">Edit Your Webpage</h3>
							<hr>
							<div class="widget tags-widget">
								<a class="tag" href="viewdonar.php">Donar List</a>
								<br>
								<a class="tag" href="viewadmin.php">Admin List</a>
								<br>
								<a class="tag" href="../message/viewmessage.php">Message</a>
								<br>
								<a class="tag" href="makeadmin.php">Make New Admin</a>
								<br>
								<a class="tag" href="adddonar_1.php">Add New Donar</a>
								<br>
								<a class="tag" href="editcontact.php">Edit Contact</a>
								<br>
								<a class="tag" href="editabout.php">Edit About</a>
							</div>
							
						</div>
						<!-- /row -->




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