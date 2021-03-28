<?php
include '../core.php';
// DB::check();
$survey = new Survey;

$all_survey_question = $survey->survery_answers_save($_POST['farmer_id'],$_POST['answer'][0],$_POST['answer'][1]);


echo json_encode(1);


