<?php 
require_once("config_file.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="DELETE FROM biodata WHERE personID = '$id'";
    $myDB->query($sql);
   header("Location:index.php");
}


?>