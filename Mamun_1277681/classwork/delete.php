<?php 

$id =  $_GET['id'];
require_once("db_config.php");
$db->query("DELETE FROM students WHERE id = '$id'");
header("Location:index.php");
?>