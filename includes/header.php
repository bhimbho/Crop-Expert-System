<?php
session_start();
require_once 'core.php';
$content = new Content;
$survey = new Survey;
$farmer = new Farmer;
$disease = new Disease;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crop Expert System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row menu fixed-top m-0 px-0">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand text-white font-weight-bold" href="expert-system.php">Crop Diag</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item active">
										<a class="nav-link text-white" href="expert-system.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-white" href="blogs.php">Expert Corner</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-white" href="diagnosis.php">Diagnosis</a>
									</li>
									<?php
										if(isset($_SESSION['farmer_id'])){?>
										<li class="nav-item">
											<a class="nav-link btn btn-light py-1 mt-1" href="logout.php">Logout</a>
										</li>
									<?php }?>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>