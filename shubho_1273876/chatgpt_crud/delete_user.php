<?php
require_once("db_config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";
    $result = $db->query($sql);

    if ($result) {
        header("Location: read_users.php");
        exit();
    } else {
        echo "Error: " . $db->error;
    }
}
