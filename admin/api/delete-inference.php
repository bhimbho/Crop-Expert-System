<?php
session_start();
include '../../core.php';
$disease = new Disease;
$solution_id = $_GET['solution_id'];
($disease->delete_inference($solution_id))?$_SESSION['msg'] = "Inference Deleted":$_SESSION['err'] = "Inference cannot Deleted";
header("location: ../disease_inference.php");



