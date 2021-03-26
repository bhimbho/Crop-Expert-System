<?php
include "includes/header.php";
DB::check();
?>
<div class="container-fluid mt-5">
	<div class="container p-4 mt-5 pt-5 mb-5">
		<div class="row">
			<div class="col-md-4">
				<img src="images/farmer-icon.png" class="img-fluid">
			</div>
			<div class="col-md-8 expert d-flex align-items-center flex-column justify-content-center">
				<h4 class="text-white">Farmers Survey</h4>
				<hr class="mb-5" style="width: 10%; margin: 0 auto; border: 2px solid white">	
				<form method="post" class="w-75 text-center">
					<h5 class="text-white">Are your crops growing big?</h5>
					<button class="btn btn-primary rounded-0">Yes</button> <button class="btn btn-primary rounded-0">No</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include "includes/footer.php";
?>