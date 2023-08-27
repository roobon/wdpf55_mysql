
<?php
$db = new mysqli("localhost","root","","evedence_mysql");

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
        echo "CALL insert_company_info ( $company, $address,$phone,)";
        $sql="CALL insert_company_info ( $company, $address,$phone,)";
        // $sql="INSERT INTO manufacture VALUES(NULL, $company, $address,$phone,)";
        $db->query($sql);
        if($db->affected_rows){
            echo "Inserted";
        }
    }
    
    
    ?>

<h3>Manufacturer Entry</h3>

<form action="" method= "post">
 <input type="text" name = "company" placeholder="Enter your company Name"> <br>
 <input type="text" name = "address" placeholder="Enter Address"> <br>
 <input type="text" name = "phone" placeholder="Enter phone number"> <br>
 <input type="submit" name = "submit" value="SUBMIT"><br>
</form>

</body>
</html>