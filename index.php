<?php
include "includes/header.php";
?>
<div class="container-fluid main d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-md-7 d-flex align-self-center flex-column">
				<h1 class="text-white text-uppercase font-weight-bold">Crop expert system</h1>
				<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<div class="card">
				<?php
					if (isset($_POST['login'])) {
						$email = $_POST['email'];
						$password = $_POST['password'];
						if($farmer->login($email, $password)){
							// header('location:survey.php');
						}
						else{
							echo "<div class='alert alert-success rounded-0'>Login Failed</div>";
						}
					}
				?>
					<div class="card-body">
						<h5 class="font-weight-bold text-uppercase text-center">Login</h5>
						<hr>
						<form method="post" action="">
							<div class="form-group">
								<label class="font-weight-bold">Email</label>
								<input type="text" name="email" class="form-control rounded-0" placeholder="Enter Email">
							</div>
							<div class="form-group">
								<label class="font-weight-bold">Password</label>
								<input type="password" name="password" class="form-control rounded-0" placeholder="Enter Password">
							</div>
							<div class="form-group">
								<button name="login" class="btn btn-success btn-block rounded-0 font-weight-bold">Login</button>
							</div>
						</form>
						<p class="text-center" style="font-size: 13px">Don't have an account yet?<a href="register.php" class="font-weight-bold text-dark"> Register Here</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

