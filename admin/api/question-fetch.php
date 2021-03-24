<?php
include '../core.php';
$survey = new Survey;
$farmer_id = $_SESSION['farmer_id'];
$all_survey_question = $survey->get_all_questions();

echo json_encode($all_survey_question);


