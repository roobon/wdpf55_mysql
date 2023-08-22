    <?php 
       $id = $_GET["id"];
       require_once("connection.php");
   
       $db->query("DELETE FROM students WHERE st_id ='$id'");
   
       header("Location:index.php");                    
    ?>