<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<?php 
session_start(); 

if ( !isset($_SESSION['u_name']) ) {
    header("Location: index.php");
}

$userName = $_SESSION['u_name'] ;
?>

<body>
   ?
</body>
</html>