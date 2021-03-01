<?php 
include 'core.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crop Expert System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid main d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-md-5 d-flex align-self-center flex-column">
					<h1 class="text-white text-uppercase font-weight-bold">Crop expert system</h1>
					<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h5 class="font-weight-bold text-uppercase text-center">Register</h5>
							<hr>
							<form action="" method="POST">
								<div class="row">
								<?php
									$farmer = new Farmer;
									if (isset($_POST['register'])) {
										$email = $_POST['email'];
										$fname = $_POST['fname'];
										$lname = $_POST['lname'];
										$gender = $_POST['gender'];
										$password = $_POST['password'];
										$cpassword = $_POST['cpassword'];
										$address = $_POST['address'];
										$phone = $_POST['phone'];
										if (trim($password) == trim($cpassword)) {
											if($farmer->farmer_registration($fname,$lname,$gender,$phone,$address,$email, $password)){
												echo "<div class='alert alert-success rounded-0'> Registration Successful. Proceed to <a href='login.php'>Login</a></div>";
											}
											else{
												echo "<div class='alert alert-success rounded-0'>Registration Failed</div>";
											}
										}
										
									}
								?>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control rounded-0" name="fname" placeholder="Enter First Name" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control rounded-0" name="lname" placeholder="Enter Surname" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" name="email" class="form-control rounded-0" placeholder="Enter Email Address" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<select name="gender" id="" class="form-control rounded-0" required>
												<option value="">--Select Gender--</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="password" name="password" class="form-control rounded-0" placeholder="Enter Password" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="password" name="cpassword" class="form-control rounded-0" placeholder="Confirm Password" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="phone" name="phone" class="form-control rounded-0" placeholder="Enter Phone Number" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea type="phone" name="address" class="form-control rounded-0" placeholder="Enter Address" required></textarea>
										</div>
									</div>
								</div>

								
								<div class="form-group">
									<button name="register" class="btn btn-success btn-block rounded-0 font-weight-bold">Register</button>
								</div>
							</form>
							<p class="text-center" style="font-size: 13px">Already have an account yet?<a href="index.php" class="font-weight-bold text-dark"> Login Here</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>