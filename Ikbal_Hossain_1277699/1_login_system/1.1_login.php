<?php 
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $pass = $_POST["password"];

        
        // echo "Your Email: $email <br>";
        // echo "Your Password: $pass <br>";
        // print_r($_POST);

        require_once("1.2_db_config.php");

        $sql = "SELECT email, password FROM users WHERE email = '$email' AND password = '$pass'";  // step: 02
        $result = $db -> query($sql);  // step: 02
        $row = $result -> fetch_assoc();

        session_start(); // step: 03

        // echo $result -> num_rows;

        if($result -> num_rows){
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];

            header ("Location: 1.3_home.php");
        } else {
            $_SESSION['error'] = "Email and password is not stored in the database";  // step: 03
            
            header("Location: 1_index.php");
        }

    }
?>

