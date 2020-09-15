<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a href="index.php" class="navbar-brand"><img src="images/logo4.png" alt="Logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-link">
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li class="nav-link">
					<a href="index.php#what" class="nav-link">What</a>
				</li>
				<li class="nav-link">
					<a href="index.php#how" class="nav-link">How</a>
				</li>
				<li class="nav-link">
					<a href="index.php#why" class="nav-link">Why</a>
				</li>
				<li class="nav-link">
					<!-- <a >My Account</a> -->
					<div class="dropdown show">
						<a class="testlink nav-link dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #947349;">
							My Account
							</a>

						<div class="dropdown-menu justify-content-center text-center" aria-labelledby="dropdownMenuLink">
							 <a href="accountHome.php" class="nav-link">Account</a>
                             <?php include_once ('logout.php');?> 
							 
							
						</div>
					</div>
				</li>
			</ul>
		</div>
	</nav>