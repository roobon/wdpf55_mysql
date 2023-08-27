<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<?php 
session_start();
if ( !isset($_SESSION['name']) ) {
    header("Location:index.php");
}

$u_name = $_SESSION['name'] ;

?>

<body>
    <h1>Welcome to Manufacturer Page <?php echo $u_name  ?> </h1>

    <button> <a href="logout.php">Logout</a> </button>
</body>
</html>