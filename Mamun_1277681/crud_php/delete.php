<?php 
$db = new mysqli('localhost', 'root', '', 'isdb_bisew_55');
$id= $_REQUEST['id'];
$db->query("DELETE FROM user WHERE id = '$id'");
if($db->affected_rows){
    header("Location:index.php");
}
?>