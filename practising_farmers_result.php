<?php
include 'includes/header.php';
$answer = $survey->get_survery_answer();
// $farmer->update_farmer_status(1);
DB::check();

?>
<div class="container-fluid mt-5">
	<div class="container p-4 mt-5 pt-5 mb-5">
		<div class="row">
            <!-- <div class="col-md-6">
                <h4>Inference/Recommendation Generated from Knowlegde Based</h4>
                <ul>
                
                    <?php
                        $pre = $survey->survey_inference_db_preplanting($answer);
                    ?>
                </ul>
            </div> -->
			<div class="col-md-4">
				<h3>Pre-planting Steps</h3><hr>
                    <div><?= ($pre->solution)?$pre->solution: "Inference Cannot be generated at the moment" ?></div>
                    
			</div>
            <div class="col-md-4">
				<h3>Planting Steps</h3><hr>
                <div><?= (isset($planting->solution))?$pre->solution: "Inference Cannot be generated at the moment" ?></div>
			</div>
            <div class="col-md-4">
				<h3>Harvesting/ Post-Planting Steps</h3><hr>
                <div><?= (isset($post->solution))?$pre->solution: "Inference Cannot be generated at the moment" ?></div>
                <a class="btn btn-dark rounded-0 btn-block">Would you like to proceed to Cassava Disease Diagnosis?</a>
                <a href="expert-system.php" class="btn btn-success">Yes</a>
                <a href="survey.php" class="btn btn-warning">No</a>
			</div>
		</div>
	</div>
</div>