<?php 
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $pass = $_POST["password"];

        
        // echo "Your Email: $email <br>";
        // echo "Your Password: $pass <br>";
        // print_r($_POST);

        require_once("1.2_db_config.php");

        $sql = "SELECT email, password FROM users WHERE email = '$email' AND password = '$pass'";
        $result = $db -> query($sql);

        session_start();

        // echo $result -> num_rows;

        if($result -> num_rows){
            header ("Location: home.php");
        } else {
            $_SESSION['error'] = "Email and password is not stored in the database";
            header("Location: 1_index.php");
        }

    }
?>

