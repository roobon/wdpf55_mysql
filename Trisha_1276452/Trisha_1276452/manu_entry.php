<?php
$db = new mysqli("localhost","root","","mysql_evidence");
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
if(isset($_POST['submit'])){
    extract($_POST);
    
    $sql = "CALL insert_company_info('$cname', '$address', '$phone')";
    
    $db->query($sql);
 if($db->affected_rows>0){
    echo "Success";
   }
}

?>

<form action="" method="post">
 <input type="text" name="cname" placeholder="Enter Company Name" ><br>
 <input type="text" name="address" placeholder="Enter Address" ><br>
 <input type="text" name="phone" placeholder="Enter Phone Number "><br>
        <input type="submit" name="submit" value="SUBMIT">


    </form>
</body>
</html>