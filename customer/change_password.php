<h1 class="text-center">Change Password</h1>
<form method="post" action="change_password.php" enctype="multipart/form-data">
	<div class="form-group">
		<label>Enter Your Current Password</label>
		<input type="password" name="old_pass" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Enter Your New Password</label>
		<input type="password" name="new_pass" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Enter Your New Password Again</label>
		<input type="password" name="new_pass_again" class="form-control" required>
	</div>
	

	<div class="text-center">
		<button name="submit" type="submit" class="btn btn-primary">
			<i class="fa fa-user-md"></i>&nbsp; update
		</button>
	</div>
</form>