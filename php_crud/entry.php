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
        if(isset($_POST['submit'])){
            extract($_POST);
            require_once("db_config.php");

           // echo "INSERT INTO persons  VALUES (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob')";

            $sql = "INSERT INTO persons  VALUES (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob')";
            $db->query($sql);

           if($db->affected_rows){
            echo "Inserted";
           }

        }  
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="fname" placeholder="Enter First Name"><br>
        <input type="text" name="lname" placeholder="Enter Last Name"><br>
        <textarea name="address" cols="30" rows="10"></textarea><br>
        <select name="city">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
        </select><br>
        <input type="text" name="email" placeholder="Enter email address"><br>
        <input type="date" name="dob" placeholder="Enter date"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>