<?php
session_start();
include '../../core.php';
$farmer = new Farmer;
$farmer_id = $_GET['farmer_id'];
($farmer->delete_farmer($farmer_id))?$_SESSION['msg'] = "Farmer Deleted":$_SESSION['err'] = "Farmer cannot Deleted";
header("location: ../users.php");



