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
							<li class="nav-item">
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

		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb" class="navigasi-breadcrumb">
							<ol class="breadcrumb nav-breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Shop</li>
							</ol>
						</nav>
					</div><!-- col-md-12 ends -->
				</div><!-- row ends -->
				<div class="row">
					<div class="col-md-3 mb-3">
						<?php include_once("includes/sidebar.php"); ?>
					</div><!-- col-md-3 ends -->
					<div class="col-md-9">
						<div class="row" id="productMain">
							<div class="col-sm-6">
								<div id="mainImage">
									<div id="myCarousel" class="carousel slide"data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
											<li data-target="#myCarousel" data-slide-to="1"></li>
											<li data-target="#myCarousel" data-slide-to="2"></li>
										</ol><!-- carousel-indicators ends -->
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img class="d-block w-100 h-25" src="admin_area/product_images/produk1.jpg" alt="First slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100 h-25" src="admin_area/product_images/produk2.jpg" alt="Second slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100 h-25" src="admin_area/product_images/produk3.jpg" alt="Third slide">
											</div>
										</div><!-- carousel-inner ends -->
										<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div><!-- mainImage ends -->
							</div><!-- col-sm-6 ends -->
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<h3 class="text-center">US Polo Assasination T-Shirt</h3>
										<form action="details.php" method="post">
											<div class="form-group row">
												<label class="col-md-5 col-form-label">Produt Quantity</label>
												<div class="col-md-7">
													<select name="product_qty" class="form-control form-control-sm">
														<option value="">1</option>
														<option value="">2</option>
														<option value="">3</option>
														<option value="">4</option>
														<option value="">5</option>
													</select>
												</div>
											</div><!-- form-group row ends -->
											<div class="form-group row">
												<label class="col-md-5 col-form-label">Produt Size</label>
												<div class="col-md-7">
													<select name="product_size" class="form-control form-control-sm">
														<option value="">Select A size</option>
														<option value="">Small</option>
														<option value="">Medium</option>
														<option value="">Large</option>
													</select>
												</div>
											</div><!-- form-group row ends -->
											<p class="price">$59</p>
											<p class="text-center buttons">
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-shopping-cart"></i>
													Add to cart
												</button>
											</p>
										</form>
									</div>
								</div><!-- card ends -->
								<div class="row mt-2" id="thumbs">
									<div class="col-sm-4">
										<a href="#" class="thumb">
											<img src="admin_area/product_images/produk1.jpg" class="img-fluid">
										</a>
									</div>
									<div class="col-sm-4">
										<a href="#" class="thumb">
											<img src="admin_area/product_images/produk1.jpg" class="img-fluid">
										</a>
									</div>
									<div class="col-sm-4">
										<a href="#" class="thumb">
											<img src="admin_area/product_images/produk1.jpg" class="img-fluid">
										</a>
									</div>
								</div>
							</div><!-- col-sm-6 ends -->
						</div><!--  row #productMain ends -->
						<div class="card" id="details">
							<div class="card-body">
								<h4>Product Details</h4>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

								<h4>Size</h4>
								<ul>
									<li>Small</li>
									<li>Medium</li>
									<li>Large</li>
								</ul>
							</div><!-- card-body ends -->
						</div><!-- card ends -->
						<div class="row mt-2">
							<div class="col-md-3 col-sm-6">
								<div class="card headline">
									<div class="card-body">
										<h4 class="text-center">You also like these products</h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<img src="admin_area/product_images/produk11.jpg" class="img-fluid">
									<div class="card-body">
										<h5 class="text-center">
											<a href="details.php">
												Marvel Polo T-Shirt
											</a>
										</h5>
										<p class="price text-center">$45</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<img src="admin_area/product_images/produk5.jpg" class="img-fluid">
									<div class="card-body">
										<h5 class="text-center">
											<a href="details.php">
												Marvel Polo T-Shirt
											</a>
										</h5>
										<p class="price text-center">$45</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<img src="admin_area/product_images/produk9.jpg" class="img-fluid">
									<div class="card-body">
										<h5 class="text-center">
											<a href="details.php">
												Marvel Polo T-Shirt
											</a>
										</h5>
										<p class="price text-center">$45</p>
									</div>
								</div>
							</div>
						</div><!-- row mt-2 ends -->
					</div><!-- col-md-9 ends -->
				</div><!-- row-ends -->
			</div><!-- container ends -->
		</div><!-- content ends -->

		
		<?php include_once "includes/footer.php"; ?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>