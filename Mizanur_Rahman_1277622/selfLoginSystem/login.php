<?php 
include_once("db_config.php");
if(isset($_POST["submit"])){
    extract($_REQUEST);  

    $sql = "SELECT name, email, password FROM users WHERE email ='$email' AND password ='$password' ";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();

    session_start();
    if($result->num_rows){
        $_SESSION["name"] = $row["name"];
        $_SESSION["email"] = $row["email"];
        header("Location: home.php");
    }
    else{
        $_SESSION["error"] = "Invalid user please make sure your info stored in our database";
        header("Location: index.php");
    }
}
?>