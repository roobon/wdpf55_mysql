<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Person Entry Form</h3>
    <?php
        require_once("db_config.php"); 
         $id = $_REQUEST["id"];                 //  $id = $_GET["id"];
         $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'");
         $row = $result->fetch_assoc();
        
        if(isset($_POST["update"])){
            extract($_POST);
            echo "UPDATE  persons SET LastName='$lname', FirstName= '$fname', Address='$address', city_name='$city', phone='$phone', dob='$dob' WHERE PersonID='$id'" ;
           $sql = "UPDATE  persons SET LastName='$lname', FirstName= '$fname', Address='$address', city_name='$city', phone='$phone', dob='$dob' WHERE PersonID='$id'" ;
        //    echo $sql;
            $db->query($sql);

            // header("Location: index.php");

           if($db->affected_rows){
            echo "Updated Successfully";
           }
        }  
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        First Name :<input type="text" name="fname" placeholder="Enter First Name" value="<?php echo  $row['FirstName'] ?>"><br>
        Last Name:<input type="text" name="lname" placeholder="Enter Last Name" value="<?php echo  $row['LastName'] ?>"><br>
        Address : <textarea name="address" cols="30" rows="1
        0"><?php echo $row['Address']?></textarea><br>
        City Name :<select name="city">
            <option value="">Select one</option>
            <option value="Dhaka"<?php if($row['city_name']=='Dhaka') echo "selected";?>>Dhaka</option>
            <option value="Khulna"<?php if($row['city_name']=='Khulna') echo "selected";?>>Khulna</option>
            <option value="Rajshahi"<?php if($row['city_name']=='Rajshahi') echo "selected";?>>Rajshahi</option>
            <option value="Sylet"<?php if($row['city_name']=='Sylet') echo "selected";?>>Sylet</option>
        </select><br>
        Phone Number :<input type="number" name="phone" value="<?php echo $row['phone'] ?>" placeholder="Enter phone number"><br>
        Date of Birth :<input type="date" name="dob"  value="<?php echo $row['dob'] ?>"placeholder="Enter date"><br>
        <input type="submit" name="update" value="UPDATE">
        <input type="hidden" value="<?php echo $row['PersonID'] ?>" name="id">
    </form>
</body>
</html>