 <?php 
    // echo $_GET["id"];   // step: 02 in delete option
    $id = $_GET["id"]; 

    // "DELETE FROM persons WHERE PersonID = 3"   // step: 01 in delete option

    require_once("db_config.php");
    $db -> query("DELETE FROM persons WHERE person_id = '$id'");
    header("Location: 1_index.php");
?>