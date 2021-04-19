<?php
include 'includes/header.php';
$answer = $survey->get_practising_survery_answer();
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
                        $pre = $survey->survey_inference_db($answer);
                    ?>
                </ul>
            </div> -->

            <div class="col-md-12">
                <h3>
                    <?php
                    if(isset($pre->stage)){
                        if($pre->stage == 0){
                            echo "Pre-planting Analysis";
                        }
                        else if($pre->stage == 1){
                            echo "Planting Analysis";
                        }
                        elseif($pre->stage == 2){
                            echo "Post-planting Analysis";
                        }
                    }
                    else{
                        echo "Not inference found";
                    }
                    ?>
                </h3><hr>
                <div><?= (isset($pre->solution))?$pre->solution: "Inference Cannot be generated at the moment" ?></div>
                <a class="btn btn-dark rounded-0 btn-block mb-3 mt-2">Would you like to proceed to Cassava Disease Diagnosis?</a>
                <div class="text-right">
                    <a href="expert-system.php" class="btn btn-success rounded-0" style="width: 10%">Yes</a>
                    <a href="survey.php" class="btn btn-warning rounded-0" style="width: 10%">No</a>
                </div>
            </div>
        </div>
    </div>
</div>