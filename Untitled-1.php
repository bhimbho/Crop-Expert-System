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
                <input type="hidden" name="farmer_id" class="farmer_id" value="<?= $_SESSION['farmer_id'] ?>">
				<?php
					$all_survey_question = $survey->get_all_questions();
					foreach ($all_survey_question as $all_survey_question) {?>
					<div class="question">
						<h5 class="text-white "><?= $all_survey_question->question ?></h5>
						<input type="radio" name="choice[]" class="choice" value="1" id="">Yes
						<input type="radio" name="choice[]" class="choice" value="0" id="">No
						<button class="btn btn-primary rounded-0 next">Next</button>
						<button class="finish">Finish</button>
					</div>
					<?php }?>
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
	    var arr=[];
        $('.finish').hide();
        $('.question').hide();

        $(".question").first().show();
        x = 0;
        $(".next").click(function (e) {
            e.preventDefault();
            var check = ($('.choice:checked').val())?$('.choice:checked').val():null;
            arr.push(check);
            if(check == null)
            {
                alert("Dear Farmer, You need to select an option");
            }
            else{
                // console.log(check);
                var nextDiv = $(".question:visible").next(".question");
                x++;
                if (nextDiv.length == 0) {
                    nextDiv = $(".question:last");
                }
                $(".question").hide();
                nextDiv.show();
                if ( nextDiv.last().index()+1 === $('.question').length) {
                    $('.next').hide();
                    $('.finish').show();
                }
                
            }
            
        });
        $('.finish').click(function(e){
            e.preventDefault();
            var check = $('.choice:checked').val();
            var farmer_id=$('.farmer_id').val()
            arr.push(check);
                        
            console.log(arr);
                       
            $.ajax({
                type: 'post',
                url: 'api/survey-question-save.php',
                data: {arr:arr, farmer_id:farmer_id},
                success:function(response){
                    // console.log(response);
                    window.location.href= 'result.php';
                }

            });
        });
    });
</script>