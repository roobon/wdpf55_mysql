<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>
</head>
<body>
     <?php 
          session_start();
          if (!isset($_SESSION['email'])) {
               header("Location: index.php");
          }
     ?>
     <h1>Welcome to the Home page, <?php echo $_SESSION['name'] ?></h1>

     <button><a href="logout.php">Logout</a></button>
</body>
</html>