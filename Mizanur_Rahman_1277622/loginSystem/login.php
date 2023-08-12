<?php 

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $pass = sha1($pass); //encrypted

    //echo "Your Email is: $email <br>";
    //echo "Your Password is: $pass";

    require_once("db_config.php");
    $sql = "SELECT name, email, password FROM users WHERE email='$email' AND password='$pass'";
    $resutl = $db->query($sql);
    //echo $resutl->num_rows;
    $row = $resutl->fetch_assoc();
    session_start();

    if($resutl->num_rows){
        $_SESSION["name"] = $row["name"];
        $_SESSION["email"] = $row["email"];
        header("Location: home.php");
    }else{
        $_SESSION["error"] = "Your Email or Password is wrong";
        //$_SESSION['error'] = "Email and password is not stored in the database";
        header("Location: index.php");
    }
}
?>