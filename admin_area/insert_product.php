<?php  
require_once "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Insert Product</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- fontawesome -->
		<link rel="stylesheet" href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
		<!-- tinymce -->
		<script src="../bower_components/tinymce/tinymce.min.js"></script>
		<script>
			tinymce.init({
				selector: '#mytextarea'
			});
		</script>

	</head>
	<body>
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fas-dashboard"></i>
						Dashboard/ Insert Product
					</li>
				</ol><!-- breadcrumb ends -->
			</div><!-- col-lg-12 ends -->
		</div><!-- row ends -->

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<i class="fas fa-money-bill"></i> Insert Products
					</div><!-- card-header ends -->
					<div class="card-body">
						<form class="container" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<label class="col-md-3 control-label">Product Title</label>
								<div class="col-md-6">
									<input type="text" name="product_title" class="form-control" required>
								</div>
							</div><!-- form-group ends -->
							<div class="form-group row">
								<label class="col-md-3 control-label">Product Category</label>
								<div class="col-md-6">
									<select name="product_cat" class="form-control">
										<option>Select a Product Categories</option>
										<?php  
										$get_p_cats = "SELECT * FROM product_categories";
										$run_p_cats = mysqli_query($con, $get_p_cats);
										while($row_p_cats = mysqli_fetch_array($run_p_cats)){
											$p_cat_id = $row_p_cats['p_cat_id'];
											$p_cat_title = $row_p_cats['p_cat_title'];

											echo "<option value='$p_cat_id'>$p_cat_title</option>";
										}
										?>
									</select>
								</div>
							</div><!-- form-group ends -->
							<div class="form-group row">
								<label class="col-md-3 control-label">Category</label>
								<div class="col-md-6">
									<select name="cat" class="form-control">
										<option>Select A Categories</option>
										<?php  
										$get_cat = "SELECT * FROM categories";
										$run_cat = mysqli_query($con, $get_cat);

										while($row_cat = mysqli_fetch_array($run_cat)){
											$cat_id = $row_cat['cat_id'];
											$cat_title = $row_cat['cat_title'];

											echo "<option value='$cat_id'>$cat_title</option>";
										}
										?>
									</select>
								</div>
							</div><!-- form-group ends -->
							<div class="form-group row">
								<label class="col-md-3 control-label">Product Image 1</label>
								<div class="col-md-6">
									
										<input type="file" class="form-control-file" name="product_img1">
										
								</div>
							</div><!-- form-group ends -->

							<div class="form-group row">
								<label class="col-md-3 control-label">Product Image 2</label>
								<div class="col-md-6">
							
										<input type="file" class="form-control-file" name="product_img2">
									
								</div>
							</div><!-- form-group ends -->

							<div class="form-group row">
								<label class="col-md-3 control-label">Product Image 3</label>
								<div class="col-md-6">
									
										<input type="file" class="form-control-file" name="product_img3">
										
								</div>
							</div><!-- form-group ends -->
							
							<div class="form-group row">
								<label class="col-md-3 control-label">Product Price</label>
								<div class="col-md-6">
									<input type="number" name="product_price" class="form-control" required>
								</div>
							</div><!-- form-group ends -->

							<div class="form-group row">
								<label class="col-md-3 control-label">Product Keyword</label>
								<div class="col-md-6">
									<input type="text" name="product_keyword" class="form-control" required>
								</div>
							</div><!-- form-group ends -->

							<div class="form-group row">
								<label class="col-md-3 control-label">Product Description</label>
								<div class="col-md-6">
									<textarea name="product_desc" class="form-control" rows="6" cols="19" id="mytextarea"></textarea>
								</div>
							</div><!-- form-group ends -->

							<div class="form-group row">
								<label class="col-md-3 control-label"></label>
								<div class="col-md-6">
									<input type="submit" name="submit" value="insert product" class="btn btn-primary form-control">
								</div>
							</div><!-- form-group ends -->

						</form>
					</div><!-- card-body ends -->
				</div><!-- card ends -->
			</div><!-- col-lg-12 ends -->
		</div><!-- row ends -->


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

<?php  
if(isset($_POST['submit'])){
	$product_title = mysqli_real_escape_string($con, $_POST['product_title']);
	$product_cat = mysqli_real_escape_string($con, $_POST['product_cat']);
	$cat = mysqli_real_escape_string($con, $_POST['cat']);
	$product_price = mysqli_real_escape_string($con, $_POST['product_price']);
	$product_keyword = mysqli_real_escape_string($con, $_POST['product_keyword']);
	$product_desc = mysqli_real_escape_string($con, $_POST['product_desc']);
	
	$product_img1 = $_FILES['product_img1']['name'];
	$product_img2 = $_FILES['product_img2']['name'];
	$product_img3 = $_FILES['product_img3']['name'];

	$temp_name1 = $_FILES['product_img1']['tmp_name'];
	$temp_name2 = $_FILES['product_img2']['tmp_name'];
	$temp_name3 = $_FILES['product_img3']['tmp_name'];

	move_uploaded_file($temp_name1, "product_images/$product_img1");
	move_uploaded_file($temp_name2, "product_images/$product_img2");
	move_uploaded_file($temp_name3, "product_images/$product_img3");

	$insert_product = "INSERT INTO products(
						    p_cat_id,
						    cat_id,
						    product_title,
						    product_img1,
						    product_img2,
						    product_img3,
						    product_price,
						    product_desc,
						    product_keyword
						)
						VALUES(
							'$product_cat',
							'$cat',
							'$product_title',
							'$product_img1',
							'$product_img2',
							'$product_img3',
							'$product_price',
							'$product_desc',
							'$product_keyword')";

	$run_product = mysqli_query($con, $insert_product);
	if($run_product){
		echo"<script>alert('product has been inserted successfully')</script>";
		echo"<script>window.open('insert_product.php', '_self')</script>";

	}
}
?>