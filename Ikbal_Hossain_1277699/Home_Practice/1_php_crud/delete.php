<?php 
    require_once("db_config.php");

    echo $_GET["id"];

    // $id = $_GET["id"];

    $sql = ( "DELETE FROM students_info WHERE student_id = '$id'" );
    $db -> query($sql);
    // header("Location: 1_index.php");
?>