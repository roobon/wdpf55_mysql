<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page</title>
</head>
<body>

<?php 
session_start();
if ( isset( $_SESSION['error'] ) ){
    echo $_SESSION['error'] ;
    unset($_SESSION['error']);
}

?>


<h3> Please Login </h3>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Enter Email"> <br>
        <input type="text" name="password" placeholder="Enter Password"> <br>
        <input type="submit" name="submit" value="SUBMIT">
        


    </form>
</body>
</html>