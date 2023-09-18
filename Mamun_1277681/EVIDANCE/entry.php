<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h3>Entry Product</h3>
<?php 
if(isset($_REQUEST['submit'])):
require_once("db_config.php");
extract($_REQUEST);
$sql = "CALL insert_company_info('$company_name', '$address', '$contact_no)'";
// $sql= "INSERT INTO manufacturer VALUES(NULL, '$company_name', '$addres', '$contact_no')";
$db->query($sql);
if($db->affected_rows>0){
    echo "Successfully inserted";
    header("Location:company_product_list.php");
}
endif;
?>
<form action="" method="post" form-con>
<!-- <input type="text" name="mid"> <b -->

<input type="text" name="name" placeholder="Enter Name"> <br>
<input type="text" name="address" placeholder="Address"> <br>
<input type="text" name="mobile" placeholder="MObile"> <br>
<input type="submit" name="submit" value="ADD NEW">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>