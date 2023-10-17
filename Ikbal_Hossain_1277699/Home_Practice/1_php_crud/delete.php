<?php 
    require_once("db_config.php");

    // echo $_GET["id"];

    $id = $_GET["id"];

    $sql = ( "DELETE FROM students_info WHERE student_id = '$id'" );
    $db -> query($sql);
    // $db -> query("DELETE FROM students_info WHERE student_id = '$id'");

     header("Location: 1_index.php");
?>

<!-- you can write this way also
    
    $result = $db->query($sql) 
    if($result.$db->affected_rows>0){
        header("Location: 1_index.php");
    } else{
        echo "Some problem is here";
    } -->

    <!--  //$result = $db;
            //if($result->affected_rows) eivabe nileo hoy -->