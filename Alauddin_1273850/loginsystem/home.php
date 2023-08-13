<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location:index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: bisque;">
    
    <h1>Congratulation... <?php echo $_SESSION['name'] ?></h1>
    <h3>You are in our home page....</h3>
    <h2>Email: <?php echo $_SESSION['email'] ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>