<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_SESSION['name'] . ", " ?> Welcome to Home page. </h1>

    <a href="logout.php">logout</a>
</body>
</html>