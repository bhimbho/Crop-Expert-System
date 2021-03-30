<?php
include 'includes/header.php';
// $answer = $survey->get_survery_answer();
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
                    
                    //     $pre = $survey->survey_inference_db_preplanting($answer);
                    //     $planting =  $survey->survey_inference_db_planting($answer);
                    //     $post = $survey->survey_inference_db_postplanting($answer);
                    ?>
                </ul>
            </div> -->
			<div class="col-md-12 pre-planting">
				<h3>Backward Chaining Prediction</h3><hr>
                <?php 
                    $sum = array_sum($_SESSION['answer']);
                    $counter = $_SESSION['counter'];
                    $div = round(($sum/$counter)*100);
                    $disease_name =$disease->get_specific_disease($_SESSION['disease_id'])->disease;
                ?>
                <div class="row">
                    <div class="col-md-4">
                    <div style="border-radius: 50% 50%; border: 1px solid; text-align: center; height: 50px;"><span style="font-weight: 1000"><?= $div ?></span></div>
                        <?php
                            if($div <= 35 and $div>=0){?>
                                <p>Your assumption score seems a little to be tagged <span class='font-weight-bold'><?= $disease_name?></span>, but if you're sure it is check result to the right. Else here are list of other disease that we think your crop might be experiencing</p>
                            <?php }
                            if($div <= 60 and $div >=36){?>
                                <p>Inference Mechanism cannot really classify your inputs as <span class='font-weight-bold' style='font-size: 20px'><?= $disease_name ?></span>, but if you're sure it is check result to the right. Else here are list of other disease that we think your crop might be experiencing</p>
                                <ul class="list-group">
                                    <?php
                                        $disease_list = $disease->all_disease_except($_SESSION['disease_id']);
                                        foreach ($disease_list as $disease_list) {?>
                                            <li class="list-group-item"><a href="expert-system.php?disease=<?= $disease_list->disease_id ?>"><?= $disease_list->disease ?></a></li>
                                        <?php }?>
                                        
                                </ul>
                                <i>Click to diagnose</i>
                            <?php }
                            if($div >=61 and $div <= 100){?>
                                <p>Your Selection is a clear indication that <span class='font-weight-bold' style='font-size: 20px'><?= $disease_name?></span></p>
                            <?php }
                        ?>
                    </div>
                    <div class="col-md-6">
                    <h3>Knowledge Base Inference Generated</h3><hr>
                        <div><?= ($disease->get_disease_solution($_SESSION['disease_id']))?$disease->get_disease_solution($_SESSION['disease_id'])->solution: "Inference Cannot be generated at the moment" ?></div>
                    </div>
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