<?php 
    if (isset($_REQUEST['submit'])) {
        extract($_REQUEST);
        $pass = sha1($password);

        require_once("./includes/config.php");
        $result = $db->query("SELECT name,email, password FROM users WHERE email = '$email' AND password = '$pass'");

        session_start();
        if($result->num_rows>0){
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header("Location: admin_home.php");
        }
        else{
            header("Location: index.php");
            $_SESSION['msg'] = "Incorrect Email and Password";
        }
    }
?>