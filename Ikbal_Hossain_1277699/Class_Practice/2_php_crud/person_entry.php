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
    // step: 02
        if(isset($_POST['submit'])){
            extract($_POST);
            require_once("db_config.php");

            // jodi check box thake tahole take implode kore array theke string a convert korte hobe. tahole akdik check box show korbe // eita checkbox er khetre projojjo

            // echo  "INSERT INTO persons VALUES (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob')";
            // $db -> query($sql);

            // step:
           $sql = "INSERT INTO persons VALUES (NULL, '$lname', '$fname', '$gender', '$address', '$city', '$email', '$dob')";
           $db -> query($sql);

        //    echo $db -> affected_rows;  // step: 3 after submission form. check for alert
            // step:
            if($db -> affected_rows){
                echo "<h3> Successfully Inserted </h3> ";
            }
        }
    ?>

<!-- This the 1st step -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        FirstName: <input type="text" name="fname" placeholder="Enter LastName"> <br>

        LastName: <input type="text" name="lname" placeholder="Enter FirstName"> <br>

        Gender: Male <input type="radio" name="gender" value="Male">
                Female <input type="radio" name="gender" value="Female"> <br>

        Address: <br> <textarea name="address" id="" cols="30" rows="10"></textarea> <br>

        City: <select name="city" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Lakshmipur">Lakshmipur</option>
        </select> <br>

        email_address: <input type="email" name="email" placeholder="Enter email"> <br>

        dob: <input type="date" name="dob" placeholder="Enter date"> <br>
        <input type="submit" name="submit" value = "SUBMIT">
        

    </form>
</body>
</html>