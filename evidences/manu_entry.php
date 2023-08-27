<?php 
    $db = new mysqli("localhost", "root", "", "wdpf55_evidences");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Manufacturer Entry</h3>
    <?php 
        if(isset($_POST['submit'])){
            extract($_POST);
            
            $sql = "CALL insert_company_info('$company', '$address', '$phone')";
            //$sql = "INSERT INTO  manufacturer VALUES(NULL, '$company', '$address', '$phone')";
            $db->query($sql);
            if($db->affected_rows>0){
                echo "Success";
            }
        }
    
    ?>
    <a href="comany_product_list.php">Company and Product List</a>
    <br><br>    
    <form action="" method="post">
        <input type="text" name="company" placeholder="Enter Company Name"><br>
        <input type="text" name="address" placeholder="Enter Address"><br>
        <input type="text" name="phone" placeholder="Enter Phone number"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>