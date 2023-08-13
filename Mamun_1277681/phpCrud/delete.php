<?php 

$id =  $_GET['id'];
require_once("db_config.php");
$db->query("DELETE FROM users WHERE ID = $id");
header("Location:index.php");
?>