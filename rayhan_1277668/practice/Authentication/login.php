<?php 
require_once("db_conncection.php");

if ( isset( $_POST['submit'] ) ){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT Name, email, password FROM users WHERE email = '$email ' AND password = '$password' ";

    $result = $db->query($query) ;

    $row = $result->fetch_assoc() ;

    session_start();    

    if ($result->num_rows) {
        header("Location: home.php");
        $_SESSION['u_name'] = $row['Name'];
        $_SESSION['u_email'] = $row['email'];
    } else {
        $_SESSION['error'] = " Login failed. Pleas try again " ;
        header("Location: index.php");
    }
}




?>