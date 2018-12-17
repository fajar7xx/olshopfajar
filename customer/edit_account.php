<h1 class="text-center">Edit Account</h1>
<form method="post" action="edit_account.php" enctype="multipart/form-data">
	<div class="form-group">
		<label>Customer Name</label>
		<input type="text" name="customer_name" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Customer Email</label>
		<input type="email" name="customer_email" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Country</label>
		<input type="text" name="country" class="form-control" required>
	</div>
	<div class="form-group">
		<label>City</label>
		<input type="text" name="city" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Contact</label>
		<input type="text" name="contact" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Address</label>
		<input type="text" name="address" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="file" name="image" class="form-control-file" required><br>
		<img src="customer_img/man.jpg" class="img-fluid img-thumbnail" width="100" height="auto">
	</div>

	<div class="text-center">
		<button name="update" type="submit" class="btn btn-primary">
			<i class="fa fa-user-md"></i>&nbsp; update
		</button>
	</div>
</form>