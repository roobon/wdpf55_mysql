<?php 

$id = $_GET['id'];
require_once("db_config.php");


 $db->query("DELETE FROM person WHERE personID = '$id'");
 header("Location:index.php");




?>