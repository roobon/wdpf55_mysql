<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login Form</h2>

<?php 
    session_start();
    if(isset($_SESSION['error'])){
        echo ($_SESSION['error']);
       unset ($_SESSION['error']);
    }
?>
    
    <form action="login.php" method="post" >
    <input type="email" name="email" placeholder="Enter Email" ><br>
    <input type="password" name="password" placeholder="Enter password"><br>
    <input type="submit" name="submit" value="LOGIN">

    </form>
    
</body>
</html>