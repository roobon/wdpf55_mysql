<?php 

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = sha1($password);

    require_once("db_config.php");

    $sql = "SELECT name, email, password FROM users WHERE email='$email' AND password = '$password'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    session_start();
    // echo $result->num_rows;

    if($result->num_rows){
        $_SESSION["name"]= $row["name"];
        $_SESSION["email"]= $row["email"];
        header("Location: home.php");

    }else {
        $_SESSION['error']="Email and Password is not stored in the database";
        header("Location: index.php");
    }



    // print_r($_POST);

    // echo "Your Email: $email <br>";
    // echo " Your Password: $pass";


}

?>