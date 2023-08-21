<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    require_once("db_config.php"); 
    $id = $_REQUEST['id'];

    if(isset($_POST['update'])){
        extract($_POST);
    //    echo "UPDATE persons SET LastName='$lname', FirstName='$fname', Address='$address', City='$city', Email_address='$email', DOB='$dob' WHERE PersonID='$id'";
        $sql = "UPDATE persons SET LastName='$lname', FirstName='$fname', Address='$address', City='$city', Email_address='$email', DOB='$dob' WHERE PersonID='$id'";
        $db->query($sql);

        if($db->affected_rows){
            echo "Updated Successfully";
        }
    }

    $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'"); //select query
    $row = $result->fetch_assoc();
    //LastName	FirstName	PersonID	Address	City	Email_address	DOB
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    First Name: <br>
    <input type="text" name="fname" placeholder="Enter first name" value="<?php echo $row['FirstName']?>"> <br>
    Last Name:<br>
    <input type="text" name="lname" placeholder="Enter last name" value="<?php echo $row['LastName']?>"> <br>
    Address:<br>
    <textarea name="address" id="" cols="20" rows="5"><?php echo $row['Address']?></textarea><br>
    City:<br>
    <select name="city">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['City']=='Dhaka') echo "selected"; ?>>Dhaka</option>
            <option value="Khulna" <?php if($row['City']=='Khulna') echo "selected"; ?>>Khulna</option>
            <option value="Rajshahi" <?php if($row['City']=='Rajshahi') echo "selected"; ?>>Rajshahi</option>
            <option value="Cumilla" <?php if($row['City']=='Cumilla') echo "selected"; ?>>Cumilla</option>
            <option value="Noakhali" <?php if($row['City']=='Noakhali') echo "selected"; ?>>Noakhali</option>
        </select><br>
    Email Address:<br>
    <input type="email" name="email" value="<?php echo $row['Email_address']?>"><br>
    Date of Birth:<br>
    <input type="date" name="dob" value="<?php echo $row['DOB']?>"><br>
    <input type="submit" name="update" value="Update">
    <input type="hidden" value="<?php echo $row['PersonID']?>" name="id">

    </form>
</body>
</html>