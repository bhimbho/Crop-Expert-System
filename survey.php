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
                <?php
                    if(isset($_POST['show'])){
                        $choice = $_POST['choice'];
                        ($choice == 1)? header("location: first-timer-survey.php"):header("location: existing-farmer-survey.php");
                    }
                ?>
				<form method="post" class="w-75 text-center" >
					<div class="question">
						<h3 class="text-white ">Are you a first time planter?</h3>
						<input type="radio" name="choice" class="choice" value="1" id="" required>Yes
						<input type="radio" name="choice" class="choice" value="0" id="" required>No
						<button class="btn btn-warning" name="show">Show Me!</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include "includes/footer.php";
?>
