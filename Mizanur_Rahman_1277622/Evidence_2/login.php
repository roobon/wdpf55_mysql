<?php 
    if (isset($_REQUEST['submit'])) {
        extract($_REQUEST);

        require_once("db_config.php");

        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password';";
        $result = $db->query($sql);
        $row = $result->fetch_object();

        session_start();
        if ($result->num_rows) {
            $_SESSION['name'] = $row->name;
            $_SESSION['email'] = $row->email;
            header("Location: home.php");
        } else {
            $_SESSION['error'] = "Error message";
            header("Location: index.php");
        }
    }
?>