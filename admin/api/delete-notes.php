<?php
session_start();
include '../../core.php';
$notes = new Notes;
$note_id = $_GET['note_id'];
($notes->delete_note($note_id))?$_SESSION['msg'] = "Note Deleted":$_SESSION['err'] = "Note cannot Deleted";
header("location: ../survey_notes.php");



