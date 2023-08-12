<?php 
    session_start();

    if(!isset($_SESSION['email'])){  // step: 06
        header("Location:1_index.php");
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
    <H1> <?php echo $_SESSION['name'] . ", " ?> Welcome to Home Page </H1>

    <a href="1.4_logout.php">Logout</a>
</body>
</html>