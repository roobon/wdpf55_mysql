<?php 
require_once('db_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['insert'])){
            extract($_POST);

            $sql = "CALL insert_company_info('$name', '$address', '$contact')";
            //$sql = "INSERT INTO manufactural VALUE(NULL, '$name', '$address', '$contact')";
            $db->query($sql);
            if($db->affected_rows){
                header("Location:company_product_list.php");
            }

        }
    
    ?>
    <div class="">
        <h3>Manufactural Entry Form</h3>
        <form action="" method="post">
            <label for="">Company Name</label><br>
            <input type="text" name="name" placeholder="Enter Company Name"><br>

            <label for="">Company Address</label><br>
            <textarea name="address" cols="30" rows="10" placeholder="Enter Company Address"></textarea><br>

            <label for="">Company Contact</label><br>
            <input type="number" name="contact"><br>

            <input type="submit" name="insert" value="INSERT">
        </form>
    </div>
    
</body>
</html>