<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "wdpf55";


$db = new mysqli($host, $user, $pass, $database);

?>
<?php 

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $db->query("DELETE FROM idb_bisew_wdpf55 WHERE ID='$id'");

    if($db->affected_rows){
     header("Location:index.php");
    }
}
?>