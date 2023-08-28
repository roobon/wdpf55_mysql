<?php 
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["password"];
    //PASSWORD will be encrypted by sha1
    echo "Your Email is $email";
    echo "Your Pass is $pass";
    
    include_once("db_config.php");
    $sql = "SELECT email , password FROM users WHERE email = '$email' AND password = '$pass'" ;
    $result = $db->query($sql);
    $row = $result->fetch_array();
    session_start();

    if($result->num_rows){
        $_SESSION["email"] = $row["email"];
        $_SESSION["password"] = $row["pass"];
        header("Location: home.php");
    }else{
        $_SESSION["error"] = "Invalid User";
    }
}
?>