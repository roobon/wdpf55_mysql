<?php 

$id =  $_GET['id'];

require_once("db_connection.php");

$db->query("DELETE FROM persons WHERE PersonID = '$id'");
header("Location:index.php");

?>