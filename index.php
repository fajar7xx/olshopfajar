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
		<link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css"/>
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
		
		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>