<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
          session_start();
          if (isset($_SESSION['err'])) {
               echo $_SESSION['err'];
               unset($_SESSION['err']);
          }
     ?>
 
    <form action="login.php" method="post">
        <input type="email", name="email" , placeholder="Enter Your Name">
        <input type="password", name="passwof" , placeholder="Enter Your Name">
        <input type="submit", name="login" , value="log_in>
    </form>
</body>
</html>