<?php 
    $db = new mysqli("localhost", "root", "", "idb_bisew");
?>
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $db->query("DELETE FROM students WHERE ID='$id'");

        if($db->affected_rows){
            header("Location:index.php");
        }
       }
    
    ?>