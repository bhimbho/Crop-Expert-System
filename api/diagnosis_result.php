<?php
session_start();
include '../core.php';
// DB::check();
$_SESSION['answer'] = $_POST['arr'];
$_SESSION['counter'] = $_POST['question_counter'];
$_SESSION['disease_id'] = $_POST['disease_id'];



echo json_encode(1);


