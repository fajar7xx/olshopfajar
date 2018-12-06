<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Ecommerce Fajar</title>
		
		<!-- fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="styles/bootstrap.min.css" />
		<!-- fontawesome -->
		<link rel="stylesheet" href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"/>
		<!-- style.css -->
		<link rel="stylesheet" type="text/css" href="styles/styles.css" />
	</head>
	<body>

		
		<div id="top"><!-- top starts -->
			<div class="container"><!-- container start -->
				<div class="row">
					<div class="col-md-6 offer">
						<a href="#" class="btn btn-success btn-sm">
							Welcome : Guest
						</a>
						<a href="#">Shopping Cart Total Price: $100, Total Item 2</a>
					</div>
					<div class="col-md-6">
						<ul class="menu">
							<li><a href="customer_register.php">Register</a></li>
							<li><a href="checkout.php">My Account</a></li>
							<li><a href="cart.php">Go To Cart</a></li>
							<li><a href="checkout.php">Login</a></li>
						</ul><!-- menu end -->
					</div>
				</div>
			</div><!-- container end -->
		</div><!-- top end -->
		
		<div class="navbar navbar-default" id="navbar">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand home">
						<!-- <img src="images/logo.png" alt="ecommerce" class="hidden-xs" /> -->
						fajarStore
					</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-align-justify"></i>
					</button>
					<button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div><!-- navbar-header ends -->
				<div class="navbar-collapse collapse" id="navigation">
					<div class="padding-nav">
						<ul class="nav navbar-nav navbar-left">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="shop.php">Shop</a></li>
							<li><a href="checkout.php">My Account</a></li>
							<li><a href="cart.php">Shopping Cart</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul><!-- nav navbar-nav navbar-left ends -->
					</div><!-- padding-nav ends -->
					<a href="cart.php" class="btn btn-primary navbar-btn right">
						<i class="fa fa-shopping-cart"></i>
						<span>4 Items in carts</span>
					</a>
					<div class="navbar-collapse collapse right">
						<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="search">
							<span class="sr-only">Toggle Search</span>
							<i class="fa fa-search"></i>
						</button>
					</div><!-- navbar-collapse collapse right ends -->
						<div class="collape clearfix" id="search">
						<form class="navbar-form" method="get" action="results.php">
							<div class="input-group">
								<input type="text" class="form-control" name="user_query" placeholder="Search" required />
								<span class="input-group-btn">
									<button type="submit" value="Search" name="search" class="btn btn-primary">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</form><!-- navbar-form ends-->
					</div><!-- collape clearfix ends-->
				</div><!-- navbar-collapse collapse ends -->
			</div><!-- container ends -->			
		</div><!-- navbar navbar-default ends -->


		<div class="container" id="slider">
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1" ></li>
						<li data-target="#myCarousel" data-slide-to="2" ></li>
						<li data-target="#myCarousel" data-slide-to="3" ></li>
					</ol><!-- carousel-indicators ends -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-75" src="admin_area/slides_images/slide1.jpg" alt="Slide1">
						</div>
						<div class="carousel-item">
							<img class="d-block w-75" src="admin_area/slides_images/slide2.jpg" alt="Slide2">
						</div>
						<div class="carousel-item">
							<img class="d-block w-75" src="admin_area/slides_images/slide3.jpg" alt="Slide3">
						</div>
						<div class="carousel-item">
							<img class="d-block w-75" src="admin_area/slides_images/slide4.jpg" alt="Slide4">
						</div>
					</div><!-- carousel-inner ends -->
					<a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>

				</div><!-- carousel slider ends -->
			</div><!-- col-md-12 ends -->
		</div><!-- container ends -->

		<div id="advantages">
			<div class="container">
				<div class="same-height-row row">
					<div class="col-sm-4">
						<div class="box same-height">
							<div class="icon">
								<i class="fa fa-tags"></i>
							</div>
							<h3>
								<a href="#">We Love Our Costumer</a>
							</h3>
							<p>We are known to provide best possible service ever</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box same-height">
							<div class="icon">
								<i class="fa fa-heart"></i>
							</div>
							<h3>
								<a href="#">Best Price</a>
							</h3>
							<p>You can check all others sites about the prices and than compare with us</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box same-height">
							<div class="icon">
								<i class="fa fa-shopping-bag"></i>
							</div>
							<h3>
								<a href="#">100% satisfaction Guaranteed</a>
							</h3>
							<p>Free returns on everything for 3 months</p>
						</div>
					</div>
				</div><!-- same-height-row ends -->
			</div><!-- container ends -->
		</div><!-- advantages ends -->

		<div id="hot">
			<div class="box">
				<div class="container">
					<div class="col-md-12">
						<h2>latest This Week</h2>
					</div>
				</div>
			</div><!-- box ends -->
		</div><!-- hot ends -->

		<div id="content" class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 single">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid"/>
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Marvel Black Kids Polo T-Shirt</a>
							</h3>
							<p class="price">$50</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-sm btn-light">View Details</a>
								<a href="details.php" class="btn btn-sm btn-primary">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</a>
							</p>
						</div> <!-- text ends -->
					</div> <!-- product ends -->
				</div> <!-- col-sm-4 col-sm-6 single ends -->

				<div class="col-md-3 col-sm-6 single">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid"/>
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Marvel Black Kids Polo T-Shirt</a>
							</h3>
							<p class="price">$50</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-sm btn-light">View Details</a>
								<a href="details.php" class="btn btn-sm btn-primary">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</a>
							</p>
						</div> <!-- text ends -->
					</div> <!-- product ends -->
				</div> <!-- col-sm-4 col-sm-6 single ends -->

				<div class="col-md-3 col-sm-6 single">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid"/>
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Marvel Black Kids Polo T-Shirt</a>
							</h3>
							<p class="price">$50</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-sm btn-light">View Details</a>
								<a href="details.php" class="btn btn-sm btn-primary">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</a>
							</p>
						</div> <!-- text ends -->
					</div> <!-- product ends -->
				</div> <!-- col-sm-4 col-sm-6 single ends -->

				<div class="col-md-3 col-sm-6 single">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid"/>
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Marvel Black Kids Polo T-Shirt</a>
							</h3>
							<p class="price">$50</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-sm btn-light">View Details</a>
								<a href="details.php" class="btn btn-sm btn-primary">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</a>
							</p>
						</div> <!-- text ends -->
					</div> <!-- product ends -->
				</div> <!-- col-sm-4 col-sm-6 single ends -->

				<div class="col-md-3 col-sm-6 single">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid"/>
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Marvel Black Kids Polo T-Shirt</a>
							</h3>
							<p class="price">$50</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-sm btn-light">View Details</a>
								<a href="details.php" class="btn btn-sm btn-primary">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</a>
							</p>
						</div> <!-- text ends -->
					</div> <!-- product ends -->
				</div> <!-- col-sm-4 col-sm-6 single ends -->

				<div class="col-md-3 col-sm-6 single">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid"/>
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Marvel Black Kids Polo T-Shirt</a>
							</h3>
							<p class="price">$50</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-sm btn-light">View Details</a>
								<a href="details.php" class="btn btn-sm btn-primary">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</a>
							</p>
						</div> <!-- text ends -->
					</div> <!-- product ends -->
				</div> <!-- col-sm-4 col-sm-6 single ends -->

				<div class="col-md-3 col-sm-6 single">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid"/>
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Marvel Black Kids Polo T-Shirt</a>
							</h3>
							<p class="price">$50</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-sm btn-light">View Details</a>
								<a href="details.php" class="btn btn-sm btn-primary">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</a>
							</p>
						</div> <!-- text ends -->
					</div> <!-- product ends -->
				</div> <!-- col-sm-4 col-sm-6 single ends -->

				<div class="col-md-3 col-sm-6 single">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid"/>
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Marvel Black Kids Polo T-Shirt</a>
							</h3>
							<p class="price">$50</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-sm btn-light">View Details</a>
								<a href="details.php" class="btn btn-sm btn-primary">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</a>
							</p>
						</div> <!-- text ends -->
					</div> <!-- product ends -->
				</div> <!-- col-sm-4 col-sm-6 single ends -->
			
			</div> <!-- row ends -->
		</div><!-- container ends -->
		
		<?php include_once "includes/footer.php"; ?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>