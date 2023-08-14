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

        $id =$_GET['id'];  // step: 01

        $result = $db -> query("SELECT * FROM persons WHERE PersonID = '$id");
        $row = $result -> fetch_assoc();

        if(isset($_POST['submit'])){
            extract($_POST);
            

            // echo  "INSERT INTO persons VALUES (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob')";
            // $db -> query($sql);

        //    $sql = "INSERT INTO persons VALUES (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob')";
           $db -> query($sql);

        //    echo $db -> affected_rows;  // step: 3 after submission form. check for alert
            
            if($db -> affected_rows){
                echo "<h3> Successfully Inserted </h3> ";
            }
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        FirstName: <input type="text" name="fname" value="<?php echo $row['FirstName'] ?>" placeholder="Enter LastName"> <br>
        LastName: <input type="text" name="lname" value="<?php echo $row['LastName'] ?>" placeholder="Enter FirstName"> <br>
        Address: <br> <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea> <br>

        City: <select name="city" id="">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['city'] = 'Dhaka') echo "selected"; ?> > Dhaka </option>
            <option value="Khulna" <?php if($row['city'] = 'Khulna') echo "selected"; ?> > Khulna </option>
            <option value="Lakshmipur" <?php if($row['city'] = 'Lakshmipur') echo "selected"; ?> > Lakshmipur </option>
        </select> <br>
        email_address: <input type="email" name="email" value="<?php echo $row['email_address'] ?>" placeholder="Enter email"> <br>
        dob: <input type="date" name="dob" value="<?php echo $row['dob'] ?>" placeholder="Enter date"> <br>
        <input type="submit" name="submit" value = "Update">

    </form>
</body>
</html>