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
    
    $id = $_GET["id"];

    $result = $db->query("SELECT * FROM persons WHERE PersoneID='$id'");
    $row = $result->fetch_assoc();



    if(isset($_POST['submit'])){
        extract($_POST);
        

        // echo $sql = "INSERT INTO persons VALUE (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob' )"; //sql string
        // $sql = "INSERT INTO persons VALUE (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob' )";
        // $db->query($sql);

        if($db->affected_rows){
            echo "Form Submited Successfully";
        }
    }
    //LastName	FirstName	PersonID	Address	City	Email_address	DOB
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    First Name: <br>
    <input type="text" name="fname" placeholder="Enter first name" value="<?php echo $row['FirstName']?>"> <br>
    Last Name:<br>
    <input type="text" name="lname" placeholder="Enter last name"> <br>
    Address:<br>
    <textarea name="address" id="" cols="20" rows="5"></textarea><br>
    City:<br>
    <input type="text" name="city"><br>
    Email Address:<br>
    <input type="email" name="email"><br>
    Date of Birth:<br>
    <input type="date" name="dob"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>