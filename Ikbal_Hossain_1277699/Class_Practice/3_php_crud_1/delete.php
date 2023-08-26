<?php 
    $id = $_GET["id"];

    $db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");

    $db -> query("DELETE FROM students WHERE id = 'id'");
    header("Location: index.php");
?>