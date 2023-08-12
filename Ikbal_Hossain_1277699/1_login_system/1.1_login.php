<?php 
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $pass = $_POST["password"];

        echo "Your Email: $email <br>";
        echo "Your Password: $pass <br>";
    }
?>

