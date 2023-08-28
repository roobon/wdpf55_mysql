<?php
include_once("db_config.php");
if (isset($_POST["email"]) && isset($_POST["password"])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST["email"]);
    $pass = validate($_POST["password"]);

    if (empty($email)) {
        header("Location:index.php?error= Email is required");
        exit();
    } else if (empty($pass)) {
        header("Location:index.php?error= Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();

        if($result->num_rows===1){
            $_POST["email"] = $row["email"];
            $_POST["password"] = $row["password"];
            header("Location: home.php");
        }else{
            $_POST["error"] = "Your Email or Password is wrong";
            //$_SESSION['error'] = "Email and password is not stored in the database";
            header("Location: index.php");
        }

    }
} else {
    header("Location:index.php");
    exit();
}
?>


