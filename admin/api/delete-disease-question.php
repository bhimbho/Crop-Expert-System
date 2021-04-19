<?php
session_start();
include '../../core.php';
$disease = new Disease;
$disease_id = $_GET['disease_id'];
$question_id = $_GET['question_id'];
($disease->delete_question($question_id,$disease_id))?$_SESSION['msg'] = "QUestion Deleted":$_SESSION['err'] = "QUestion cannot Deleted";
header("location: ../disease_question_list.php?disease_id=".$disease_id);



