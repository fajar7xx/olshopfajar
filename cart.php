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
								<a class="nav-link active" href="cart.php">Shopping Cart</a>
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
								<li class="breadcrumb-item active" aria-current="page">Cart</li>
							</ol>
						</nav>
					</div><!-- col-md-12 ends -->
				</div><!-- row ends -->
				<div class="row">
					<div class="col-md-9" id="cart">
						<div class="card">
							<div class="card-body">
								<form action="cart.php" method="post" enctype="multipart-form-data">
									<h3>Shopping Cart</h3>
									<p class="text-muted">
										You currently have 3 item(s) in your cart.
									</p>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th colspan="2">Product</th>
													<th>Quantity</th>
													<th>Unit Price</th>
													<th>Size</th>
													<th colspan="1">Delete</th>
													<th colspan="2">Sub Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="admin_area/product_images/produk1.jpg"></td>
													<td><a href="#">Marvel Black Polo T-Shirt</a></td>
													<td>2</td>
													<td>$50.00</td>
													<td>Large</td>
													<td><input type="checkbox" name="remove[]"></td>
													<td>$100.000</td>
												</tr>
												<tr>
													<td><img src="admin_area/product_images/produk1.jpg"></td>
													<td><a href="#">Marvel Black Polo T-Shirt</a></td>
													<td>2</td>
													<td>$50.00</td>
													<td>Large</td>
													<td><input type="checkbox" name="remove[]"></td>
													<td>$100.000</td>
												</tr>
												<tr>
													<td><img src="admin_area/product_images/produk1.jpg"></td>
													<td><a href="#">Marvel Black Polo T-Shirt</a></td>
													<td>2</td>
													<td>$50.00</td>
													<td>Large</td>
													<td><input type="checkbox" name="remove[]"></td>
													<td>$100.000</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<th colspan="5">Total </th>
													<th colspan="2">$100.00</th>
												</tr>
											</tfoot>
										</table>
									</div><!-- table-responsive ends -->
									<div class="card-footer">
										<div class="float-left">
											<a href="index.php" class="btn btn-secondary btn-sm">
												<i class="fa fa-chevron-left"></i>
												Continue Shopping
											</a>
										</div><!-- float left ends -->
										<div class="float-right">
											<button class="btn btn-secondary btn-sm" type="submit" name="update" value="Update Cart">
												<i class="fas fa-sync"></i> Update Cart
											</button>
											<a href="checkout.php" class="btn btn-success btn-sm">
												Process to Chechout
												<i class="fa fa-chevron-right"></i>
											</a>
										</div><!-- float right ends -->
									</div><!-- card footer ends -->
								</form>
							</div><!-- card body ends -->
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
					</div><!--  .col-md-9 #cart ends -->
					<div class="col-md-3">
						<div class="card" id="order-summary">
							<div class="card-header">
								<h5>Order Summary</h5>
							</div><!-- card-header ends -->
							<div class="card-body">
								<p class="text-muted">
									Shipping and additional costs are calculated based on the values you have entered.
								</p>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td>Order Subtotal</td>
												<th>$200.00</th>
											</tr>
											<tr>
												<td>Shipping and handling</td>
												<td>$0.00</td>
											</tr>
											<tr>
												<td>Tax</td>
												<td>$0.00</td>
											</tr>
											<tr class="total">
												<td>Total</td>
												<th>$200.00</th>
											</tr>
										</tbody>
									</table>
								</div><!-- table responsive ends -->
							</div><!-- card-body ends -->
						</div><!-- card order-summary ends -->
					</div><!-- col-md-3 ends -->
				</div><!-- row ends -->
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