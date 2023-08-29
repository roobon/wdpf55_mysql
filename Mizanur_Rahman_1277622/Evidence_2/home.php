<?php 
    session_start();
    if(!isset($_SESSION["email"])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1><?php session_start(); echo $_SESSION['name'] ?>, Thank You for Login</h1>
    <a href="index.php">Log Out</a>
</body>
</html>