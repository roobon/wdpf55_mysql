<?php 
  $db = new mysqli("localhost", "root", "", "singer");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>New Product Entry</h2>
    <?php 
    if(isset($_POST['submit'])) {
        extract($_REQUEST);

        $sql = "CALL insert_company_info('$name', '$address', '$contact_no')";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Success";
            header("Location : companylist.php");
        }
    }
    
    
    
    ?>

     <a href="companylist.php">Company and Product List</a>
    <form action="" method="post">
     Company Name : <input type="text" name="name" placeholder="Enter Your Name"><br><br>
     Address : <textarea name="address" id="" cols="30" rows="10" placeholder="Enter Your Address" ></textarea><br><br>
     Contact_No : <input type="number" name="contact_no">

     <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>