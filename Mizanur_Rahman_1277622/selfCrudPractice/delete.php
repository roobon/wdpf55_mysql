<?php 
require_once("db_config.php");
$id = $_GET['id'];
$db->query("DELETE FROM students WHERE id='$id'");
header("Location: index.php");
?>