<?php include '../inc/donarheader.php' ?>

<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(.././img/wallpaper2you_37295.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
								<h1 class="white-text">Search Your Blood Group</h1>
								<div class="widget search-widget">
									<form action="searchdetails.php" method="POST">
										<input class="input" type="text" name="searchdata">
										<button name="search"><i class="fa fa-search"></i></button>
									</form>

								
								</div>
								<!-- /search widget -->

								<br>
								<div class="col-md-12 widget tags-widget">
										<a class="main-button icon-button" href="viewdonar_2.php">View all Blood Donar List</a>
								</div>
							</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

<?php include '../inc/donarfooter.php'; ?>