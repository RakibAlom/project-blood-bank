<?php include '../inc/adminheader.php'; ?>

	<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(.././img/015.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text">Search Your Blood Group</h1>
							<form action="searchdetails.php" method="POST">
								<div class="col-md-5">
									<input type="text" name="searchdata" placeholder="search blood group">
								</div>
								<div class="col-md-4">
									<input class="btn btn-danger" type="submit" name="search" value="Search">
								</div>
							</form>
							<br>
							<br>
							<div class="col-md-8 widget tags-widget">
								<a class="main-button icon-button" href="viewdonar.php">View all Blood Donar List</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

<?php include '../inc/adminfooter.php'; ?>