<?php
include "includes/header.php";
DB::check();
?>
<div class="container-fluid mt-5">
	<div class="container p-4 mt-5 pt-5 mb-5">
		<div class="row expert">
			<div class="col-md-4">
				<img src="images/farmer-icon.png" class="img-fluid">
			</div>
			<div class="col-md-8 d-flex align-items-center flex-column justify-content-center">
				<h4 class="text-white">Farmers Survey</h4>
				<hr class="mb-5" style="width: 10%; margin: 0 auto; border: 2px solid white">	
				<form method="post" class="w-75 text-center">
                <input type="hidden" name="farmer_id" class="farmer_id" value="<?= $_SESSION['farmer_id'] ?>">
                    <div class="question">
						<h3 class="text-white ">What Crop Are you interested in knowing about?</h3>
                        <div class="form-group">
						<select name="crop_choice" id="crop_choice" class="form-control rounded-0" required>
                            <option value="">Select Crop</option>
                            <?php
                                $crops = $survey->get_all_crops();
                                foreach ($crops as $crops) {?>
                                <option value="<?= $crops->crop_id?>"><?= $crops->crop?></option>
                                <?php }?>
                        </select>
                        </div>
                        <div class="form-group">
						<button class="btn btn-warning btn-block rounded-0 next">Next</button>
                        </div>
                        <div class="form-group">
						<button class="finish btn btn-warning btn-block rounded-0">Finish</button>
                        </div>
					</div>
                    <div class="question">
						<h3 class="text-white ">What Variety of Cassava seed are you interested in planting?</h3>
                        <div class="form-group">
						<select name="seed" id="seed" class="form-control rounded-0" required>
                            <option value="">Select Variety</option>
                            <?php
                                $cassava = $survey->get_all_cassava_varieties();
                                foreach ($cassava as $cassava) {?>
                                <option value="<?= $cassava->cassava_id?>"><?= $cassava->cassava?></option>
                                <?php }?>
                        </select>
                        </div>
                        <div class="form-group">
						<button class="btn btn-warning btn-block rounded-0 next">Next</button>
                        </div>
					</div>
                    <div class="question">
						<h3 class="text-white ">What Stage of Cassava Planting are you interested?</h3>
                        <div class="form-group">
						<select name="stage" id="stage" class="form-control rounded" required>
                            <option value="">Select Stage</option>
                                <option value="0">Pre-Planting</option>
                                <option value="1">Planting</option>
                                <option value="2">Post-Planting</option>
                        </select>
                        </div>
						<button class="btn btn-warning btn-block rounded-0 next">Next</button>
						<button class="finish btn btn-warning btn-block rounded-0">Finish</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include "includes/footer.php";
?>
<script type="application/javascript">
	$(function() {
	    var answer=[];
        $('.finish').hide();
        $('.question').hide();

        $(".question").first().show();
        x = 0;
        $(".next").click(function (e) {
                e.preventDefault();
                if(x == 0 && $('#crop_choice').val() != 2){
                    alert("The Expert System currently focuses on one problem domain(Cassava) for efficiency");
                    $('.question').length = $('.question').length--;
                    nextDiv.last().index()++;
                    x--;
                }
                if(x == 1 && $('#seed').val() == ""){
                    alert("No option selected");
                    $('.question').length = $('.question').length--;
                    nextDiv.last().index()++;
                    x--;
                }
                var nextDiv = $(".question:visible").next(".question");
                x++;
                if (nextDiv.length == 0) {
                    nextDiv = $(".question:last");
                }
                $(".question").hide();
                nextDiv.show();
                if ( nextDiv.last().index() === $('.question').length) {
                    $('.next').hide();
                    $('.finish').show();
                }
            
        });
        $('.finish').click(function(e){
            
            e.preventDefault();
            if(x == 2 && $('#stage').val() == ""){
                    alert("It's Crucial you select a planting stage");
                    $('.question').length = $('.question').length--;
                    nextDiv.last().index()++;
                    x--;
            }
            else{
                var crop_choice = $('#crop_choice').val();
                var seed = $('#seed').val();
                var stage = $('#stage').val();
                var farmer_id=$('.farmer_id').val()
                answer.push(crop_choice);
                answer.push(seed);
                answer.push(stage);
                            
                // console.log(arr);
                        
                $.ajax({
                    type: 'post',
                    url: 'api/survey-question-farmer-save.php',
                    data: {answer:answer, farmer_id:farmer_id},
                    success:function(response){
                        // console.log(response);
                        window.location.href= 'practising_farmers_result.php';
                    }

                });
            }
        });
    });
</script>