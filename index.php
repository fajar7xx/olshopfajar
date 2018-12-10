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

		<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
			<div class="container">
				<a class="navbar-brand home" href="index.php">FajarStore</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navigation">
					<div class="padding-nav">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="shop.php">Shop</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="checkout.php">My Account</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="cart.php">Shopping Cart</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact Us</a>
							</li>
						</ul>
					</div><!-- padding-nav ends -->		
				</div><!-- collapse navbar-collapse ends -->
				<div class="clearfix">
					<button class="btn btn-primary mr-1" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="collapseExample">
						<i class="fa fa-search"></i>
					</button>
					<a href="cart.php" class="btn btn-primary navbar-btn right">
						<i class="fa fa-shopping-cart"></i>
						<span>4 Items in carts</span>
					</a>
				</div><!-- clearfix ends -->
			</div><!-- container ends -->
		</nav><!-- navbar ends -->

		<div class="collapse clearfix bg-white" id="search">
			<div class="container">
				<form class="form-inline navbar-form my-1" method="get" action="results.php">
						<input class="form-control mr-sm-1" type="text" placeholder="Search" aria-label="Search" name="user-query" required>
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div><!-- container ends -->
		</div><!-- collapse celarfix -->

		<div class="container my-4 mx-auto" id="slider">
			<div id="slides_images" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slides_images" data-slide-to="0" class="active"></li>
					<li data-target="#slides_images" data-slide-to="1"></li>
					<li data-target="#slides_images" data-slide-to="2"></li>
					<li data-target="#slides_images" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100 h-25" src="admin_area/slides_images/slide1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 h-25" src="admin_area/slides_images/slide2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 h-25" src="admin_area/slides_images/slide3.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 h-25" src="admin_area/slides_images/slide4.jpg" alt="Fourth slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#slides_images" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#slides_images" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

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