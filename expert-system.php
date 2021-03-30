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
                    <input type="hidden" id="disease_id" value="<?= $_GET['disease'] ?>">
                    <?php
                    $all_question = $disease->get_all_questions($_GET['disease']);
                    foreach ($all_question as $all_question) {?>
                    <div class="question">
                      <div class="text-white "><?= $all_question->question ?></div>
                      <div class="form-group">
                        <label class="text-white">
                          <input type="radio" name="choice[]" class="choice" value="1" id="" required>Yes
                      </label>
                      <label class="text-white">
                          <input type="radio" name="choice[]" class="choice" value="0" id="" required>No
                      </label>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-warning btn-block rounded-0 next mx-auto" style="width: 48%">Next</button>
                </div>
                <div class="form-group">
                    <button class="btn btn-warning btn-block rounded-0 mx-auto finish" style="width: 48%">Finish</button>
              </div>
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
                if ( nextDiv.last().index() == $('.question').length+1) {
                    $('.next').hide();
                    $('.finish').show();
                }
                
            }
            
        });
     $('.finish').click(function(e){
        e.preventDefault();
        var check = $('.choice:checked').val();
        var farmer_id=$('.farmer_id').val()
        var disease_id=$('#disease_id').val()
        arr.push(check);
        x++; 
					//   console.log(arr, x);
                    $.ajax({
                        type: 'post',
                        url: 'api/diagnosis_result.php',
                        data: {arr:arr, farmer_id:farmer_id, question_counter:x,disease_id:disease_id},
                        success:function(response){
                    // console.log(response);
                    window.location.href= 'disease_diagnosis_result.php';
                }

            });
                });
 });
</script>