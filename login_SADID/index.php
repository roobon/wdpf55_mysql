<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
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
          <input type="email" name="email" placeholder="Enter your email"> <br>
          <input type="password" name="password" placeholder="Enter your password"><br>
          <input type="submit" value="Login" name="login">
     </form>
</body>
</html>