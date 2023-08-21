<?php 
    session_start();
    if(!isset($_SESSION['myemail'])){
        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1><?php echo $_SESSION["myname"].",";?>Congratulation!</h1>

    <a href="log_out.php" class="btn btn-primary">Logout</a>
</body>
</html>