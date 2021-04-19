<?php
include '../../core.php';
$content = new Content;
$blog_id = $_GET['blog_id'];
($content->delete_blog($farmer_id))?$_SESSION['msg'] = "Blog Deleted":$_SESSION['err'] = "Blog cannot Deleted";
header("location: ../users.php");



