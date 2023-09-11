

<?php 
//database connection
$host = "localhost";
$user = "root";
$pass = "";
$database = "idb";


$db = new mysqli($host, $user, $pass, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Product Name: <br>
    <input type="text" name="pname" placeholder="Enter a product name"> <br>
    
    Price:<br>
    <input type="number" name=price>
    
    Contact:<br>
    <input type="text" name="contact"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>