<?php
include '../core.php';
// DB::check();
$survey = new Survey;

$all_survey_question = $survey->survery_answers_save($_POST['farmer_id'],$_POST['arr'][0],$_POST['arr'][1],$_POST['arr'][2],$_POST['arr'][3],$_POST['arr'][4],$_POST['arr'][5],$_POST['arr'][6],$_POST['arr'][7]);


echo json_encode(1);


