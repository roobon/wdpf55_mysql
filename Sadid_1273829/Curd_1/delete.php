<?php
$db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");
    
    $id = $_REQUEST['id'];
    $db->query("DELETE FROM students WHERE id='$id' ");

    if ($db->affected_rows) {
        header("Location: index.php");
    }
?>