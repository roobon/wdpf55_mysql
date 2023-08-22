<?php


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    require_once("db_config.php");

    $sql = "SELECT name, email, password FROM users WHERE email='$email' AND password = '$pass'";
    $result = $db->query($sql);
    session_start();

    if ($result->num_rows) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];

        header("Location: home.php");
    } else {
        $_SESSION['error'] = "Email and password is not stored in the database";
        header("Location: index.php");
    }
}
