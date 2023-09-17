<?php 

require("db-config.php");

$id = $_GET['ID'] ;

$sql = "DELETE FROM games WHERE id = '$id' ";
$db->query($sql);
session_start();
$_SESSION['delete_msg'] = "Data has been deleted...!" ;
header("Location:index.php");


?>