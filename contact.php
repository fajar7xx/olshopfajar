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
							<li class="nav-item active">
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
								<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
							</ol>
						</nav>
					</div><!-- col-md-12 ends -->
				</div><!-- row ends -->
				<div class="row">
					<div class="col-md-3 mb-3">
						<?php include_once("includes/sidebar.php"); ?>
					</div><!-- col-md-3 ends -->
					<div class="col-md-9">
						<div class="card">
							<div class="card-header">
								<h3 class="text-center">Contact Us</h3>
								<p class="text-muted text-center">
									if you have any questions, please feel free to contact us, out customers service center is working for you 24/7
								</p>
							</div>
							<div class="card-body">
								<form action="contact.php" method="post">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="name" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Subject</label>
										<input type="text" name="subject" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Message</label>
										<textarea name="message" class="form-control" rows="4"></textarea>
									</div>
									<div class="text-center">
										<button name="submit" type="submit" class="btn btn-primary">
											<i class="fa fa-user-md"></i>&nbsp; Send Message
										</button>
									</div>
								</form>
							</div>
						</div>
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