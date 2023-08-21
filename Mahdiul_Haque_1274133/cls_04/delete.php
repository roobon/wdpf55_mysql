<?php 
   $db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");
?>


<?php 

if(isset($_GET['delete'])){
    if($_GET['action']=='delete') {
        $id = $_GET['id'];
        
    $db->query("DELETE FROM students WHERE id='$id'");

    if($db->affected_rows){
        echo "Deleted";
    }
    }

















?>