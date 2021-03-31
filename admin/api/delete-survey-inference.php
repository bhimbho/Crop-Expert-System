<?php
session_start();
include '../../core.php';
$survey = new Survey;
$knowledge_id = $_GET['knowledge_id'];
($survey->delete_inference($knowledge_id))?$_SESSION['msg'] = "Inference Deleted":$_SESSION['err'] = "Inference cannot Deleted";
header("location: ../survey_knowledge_base.php");



