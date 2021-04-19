<?php
session_start();
include '../../core.php';
$disease = new Disease;
$disease_id = $_GET['disease_id'];
($disease->delete_disease($disease_id))?$_SESSION['msg'] = "Disease Deleted":$_SESSION['err'] = "Disease cannot Deleted";
header("location: ../disease_knowledge_base.php");



