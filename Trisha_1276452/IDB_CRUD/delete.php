<?php 

$id =  $_GET['id'];

require_once("connection.php");

$db->query("DELETE FROM person2 WHERE ID = '$id'");
header("Location:index.php");

?>