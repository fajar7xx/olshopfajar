<div class="card sidebar-menu mb-4">
	<div class="card-header">
		<center>
			<img src="customer_img/man.jpg" alt="profil picture" class="img-fluid">
		</center>
	</div><!-- card header ends -->
	<div class="card-body">
		<h5 class="card-tittle text-center">Name : Fulan Bin Fulan</h5>
		<ul class="nav nav-pills flex-column">
			<li class="nav-item">
				<a class="nav-link <?php if(isset($_GET['my_orders'])){echo "active";} ?>" href="my_account.php?my_orders">
					<i class="fa fa-list"></i>&nbsp;
					My Orders
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if(isset($_GET['pay_offline'])){echo "active";} ?>" href="my_account.php?pay_offline">
					<i class="fas fa-money-bill"></i>&nbsp;
					Pay Offline
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if(isset($_GET['edit_account'])){echo "active";} ?>" href="my_account.php?edit_account">
					<i class="fa fa-user"></i>&nbsp;
					Edit Account
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if(isset($_GET['change_password'])){echo "active";} ?>" href="my_account.php?change_password">
					<i class="fa fa-lock"></i>&nbsp;
					Change Password
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if(isset($_GET['delete_account'])){echo "active";} ?>" href="my_account.php?delete_account">
					<i class="fa fa-eraser"></i>&nbsp;
					Delete Account
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">
					<i class="fas fa-sign-out-alt"></i>&nbsp;
					Logout
				</a>
			</li>		
		</ul><!-- nav nav-fill nav-stacked ends -->
	</div><!-- card-body ends -->
</div><!-- card sidebar-menu ends -->