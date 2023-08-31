<?php 
    $db  =  new mysqli("localhost", "root", "", "factory");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>New Product Entry</h2>
   
    <a href="companylist.php">Company and Product List</a>
    <form action="" method="post">
        Company Name : <input type="text" name="name" placeholder="Enter Company Name"><br><br>
        Address : <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
        Contact No: <input type="number" name="contact_no"><br><br>
        
      
        <input type="submit" name="submit" value="SUBMIT">
        



    </form>
</body>
</html>