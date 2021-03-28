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
                        $planting =  $survey->survey_inference_db_planting($answer);
                        $post = $survey->survey_inference_db_postplanting($answer);
                    ?>
                </ul>
            </div> -->
			<div class="col-md-12 pre-planting">
				<h3>Pre-planting Steps</h3><hr>
                    <div><?= ($pre->solution)?$pre->solution: "Inference Cannot be generated at the moment" ?></div>
                 <div class="col-md-6 d-flex align-self-end justify-content-end float-right p-0 mt-5">
                    <button class="btn btn-warning rounded-0 w-25 next-btn-1">Next</button>
                </div>   
			</div>
            <div class="col-md-12 planting">
				<h3>Planting Steps</h3><hr>
                <div><?= (isset($planting->solution))?$pre->solution: "Inference Cannot be generated at the moment" ?></div>
                <div class="col-md-6 d-flex align-self-end justify-content-end float-right p-0 mt-5">
                    <button class="btn btn-warning rounded-0 w-25 previous-btn-1 mr-1">Previous</button>
                    <button class="btn btn-warning rounded-0 w-25 next-btn-2">Next</button>
                </div>
			</div>
            <div class="col-md-12 post-planting">
				<h3>Harvesting/ Post-Planting Steps</h3><hr>
                <div><?= (isset($post->solution))?$pre->solution: "Inference Cannot be generated at the moment" ?></div>
                <a class="btn btn-dark rounded-0 btn-block mb-2">Would you like to proceed to Cassava Disease Diagnosis?</a>
                <a href="expert-system.php" class="btn btn-success rounded-0">Yes</a>
                <a href="survey.php" class="btn btn-warning rounded-0 text-white">No</a>
                <div class="col-md-6 d-flex align-self-end justify-content-end float-right p-0 mt-5">
                    <button class="btn btn-warning rounded-0 w-25 previous-btn-2">Previous</button>
                </div>
			</div>
		</div>
	</div>
</div>

<?php 
include "includes/footer.php";
?>

<script>
    $(()=>{
        $('.pre-planting').show();
        $('.planting').hide();
        $('.post-planting').hide();
        $('.next-btn-1').click(function(){
            $('.pre-planting').hide();
            $('.planting').show();
            $('.post-planting').hide();
        });
        $('.next-btn-2').click(function(){
            $('.pre-planting').hide();
            $('.planting').hide();
            $('.post-planting').show();
        });
        $('.previous-btn-1').click(function(){
            $('.pre-planting').show();
            $('.planting').hide();
            $('.post-planting').hide();
        });
        $('.previous-btn-2').click(function(){
            $('.pre-planting').hide();
            $('.planting').show();
            $('.post-planting').hide();
        });
            

    })
</script>