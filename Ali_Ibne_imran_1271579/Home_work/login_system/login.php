<?php 
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["pswd"];
        // $password = sha1($password); //encrypted password


        require_once("db_config.php"); //connection db file

        $sql = "SELECT Name, Email, Password FROM users WHERE Email='$email' AND Password='$password'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();

        session_start();

        if($result->num_rows){
            $_SESSION["myname"] = $row["Name"];
            $_SESSION["myemail"] = $row["Email"];

            header("Location: home.php");
        }else{
            $_SESSION["error"] = "Email and Password is doesn't match";
            header("Location: index.php");
        }
    }
?>
