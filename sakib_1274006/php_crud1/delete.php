<!-- DELETE DATA START -->

<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "wdpf55";


$db = new mysqli($host, $user, $pass, $database);

?>

<?php 


$id = $_GET["ID"];


$db->query("DELETE FROM persons WHERE ID= '$id'");
header("Location:index.php");



?>

<!-- DELETE DATA END -->