<?php 


    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $pass = sha1($pass); // encrypted

        require_once("db_config.php");

        $sql = "SELECT name, email, password FROM users WHERE email='$email' AND password = '$pass'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        session_start();

        if($result->num_rows){
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            header("Location: home.php");
        } else {
            $_SESSION['error'] = "Email and password is not stored in the database<br>";
            header("Location: index.php");
        }
       

    }

?>