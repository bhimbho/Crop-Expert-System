<?php
include 'includes/header.php';
$answer = $survey->get_survery_answer();
$farmer->update_farmer_status(1);
DB::check();

?>
<div class="container-fluid mt-5">
	<div class="container p-4 mt-5 pt-5 mb-5">
		<div class="row">
            <div class="col-md-6">
                <h4>Inference/Recommendation Generated from Knowlegde Based</h4>
                <ul>
                    <?php
                    
                        echo $survey->survey_inference($answer);
                    ?>
                </ul>
            </div>
			<div class="col-md-6">
				<h3>Question Answered</h3>
                <table class="table table-bordered">
                    <tr>
                        <th colspan="2">Answer</th>
                    </tr>
                    <tr>
                        <td><?= $survey->get_question_by_id(1)->question ?></td>
                        <td><?= $survey->yes_no($answer->ans_1) ?></td>
                    </tr>
                    <tr>
                        <td><?= $survey->get_question_by_id(2)->question ?></td>
                        <td><?= $survey->yes_no($answer->ans_2) ?></td>
                    </tr>
                    <tr>
                        <td><?= $survey->get_question_by_id(3)->question ?></td>
                        <td><?= $survey->yes_no($answer->ans_3) ?></td>
                    </tr>
                    <tr>
                        <td><?= $survey->get_question_by_id(4)->question ?></td>
                        <td><?= $survey->yes_no($answer->ans_4) ?></td>
                    </tr>
                    <tr>
                        <td><?= $survey->get_question_by_id(5)->question ?></td>
                        <td><?= $survey->yes_no($answer->ans_5) ?></td>
                    </tr>
                    <tr>
                        <td><?= $survey->get_question_by_id(6)->question ?></td>
                        <td><?= $survey->yes_no($answer->ans_6) ?></td>
                    </tr>
                    <tr>
                        <td><?= $survey->get_question_by_id(7)->question ?></td>
                        <td><?= $survey->yes_no($answer->ans_7) ?></td>
                    </tr>
                    <tr>
                        <td><?= $survey->get_question_by_id(8)->question ?></td>
                        <td><?= $survey->yes_no($answer->ans_8) ?></td>
                    </tr>
                </table>
                <a class="btn btn-dark rounded-0 btn-block" href="expert-system.php">Proceed to Disease Diagnosis</a>
			</div>
		</div>
	</div>
</div>