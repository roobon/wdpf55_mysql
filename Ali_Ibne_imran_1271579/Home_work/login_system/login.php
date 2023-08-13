<?php 
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["pswd"];

        require_once("db_config.php");

        $sql = "SELECT Name, Email, Password FROM users WHERE Email='$email' AND Passsword='$password'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();

        session_start();

        if($result->num_rows){
            $_SESSION["Name"] = $row["Name"];
            $_SESSION["Email"] = $row["Email"];

            header("Location: home.php");
        }else{
            $_SESSION["error"] = "Email and Password is doesn't match";
            header("Location: index.php");
        }

    }

?>