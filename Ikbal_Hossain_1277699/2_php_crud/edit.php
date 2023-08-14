<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Person Entry Form </h3>
    <?php 
        require_once("db_config.php");

        $id =$_REQUEST['id'];  // step: last after

        // $result = $db -> query("SELECT * FROM persons WHERE PersonID = '$id");
        // $row = $result -> fetch_assoc();

        // ei dui line ke echo "Successfully Updated ar porer line a bosano holo. jete update er pore form ar data gula update hoye jaoyar por je obosthay thakbe sei vabei dekhabe.

        if(isset($_POST['update'])){
            extract($_POST);
            

            // echo  "INSERT INTO persons VALUES (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob')";
            // $db -> query($sql);

           $sql = "UPDATE persons SET LastName ='$lname', FirstName = '$fname', Address = '$address', city = '$city', email_address = '$email', dob = '$dob') WHERE PersonID = '$id' ";

           $db -> query($sql);

        //    echo $db -> affected_rows;  // step: 3 after submission form. check for alert
            
            if($db -> affected_rows){
                echo "<h3> Successfully Updated </h3> ";
            }
        }

        $result = $db -> query("SELECT * FROM persons WHERE PersonID = '$pid");
        $row = $result -> fetch_assoc();
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        FirstName: <input type="text" name="fname" value="<?php echo $row['FirstName'] ?>" placeholder="Enter LastName"> <br>

        LastName: <input type="text" name="lname" value="<?php echo $row['LastName'] ?>" placeholder="Enter LastName"> <br>

        Address: <br> <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea> <br>

        City: <select name="city" id="">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['city'] = 'Dhaka') echo "selected"; ?> > Dhaka </option>
            <option value="Khulna" <?php if($row['city'] = 'Khulna') echo "selected"; ?> > Khulna </option>
            <option value="Lakshmipur" <?php if($row['city'] = 'Lakshmipur') echo "selected"; ?> > Lakshmipur </option>
        </select> <br>

        email_address: <input type="email" name="email" value="<?php echo $row['email_address'] ?>" placeholder="Enter email"> <br>

        dob: <input type="date" name="dob" value="<?php echo $row['dob'] ?>" placeholder="Enter date"> <br>
        <input type="submit" name="update" value = "Update">

        <input type= "hidden" value = " <?php echo $row['PersonID'] ?>" name = "pid" >

    </form>
</body>
</html>