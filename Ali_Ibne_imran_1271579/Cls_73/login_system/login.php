<?php 
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["pswd"];
        $password = sha1($password); //encrypted password


        require_once("db_config.php"); //connection db file

        $sql = "SELECT name, email, password FROM users WHERE email='$email' AND password='$password'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();

        session_start();

        if($result->num_rows){
            $_SESSION["name"] = $row["name"];
            $_SESSION["email"] = $row["email"];

            header("Location: home.php");
        }else{
            $_SESSION["error"] = "Email and Password is doesn't match";
            header("Location: index.php");
        }
    }
?>
