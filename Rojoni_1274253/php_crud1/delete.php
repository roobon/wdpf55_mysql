 
<?php 
$db = new mysqli ("localhost","root","","idb_bisew_wdpf55");

?>
<?php 
if(isset($_GET['id'])){
   
   $id = $_GET['id'];

    $db->query("DELETE FROM students WHERE id='$id'");

    if($bd->affeted_rows){
        header("Location:index.php");
    
    }
}

?>





