<?php 
$id = $_GET["id"];
require_once("db_config.php");
$db->query("DELETE FROM persons2 WHERE PersonID = '$id'");
header("Location: index.php");
?>