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
    <h1>Thank You for Login</h1>
    <a href="logout.php">Log Out</a>
</body>
</html>