<?php 

require_once('db_config.php');

$id = $_GET['id'];

$sql = "DELETE FROM persons WHERE PersonID = '$id' " ;

$myDB->query($sql);
header("Location:index.php");

?>