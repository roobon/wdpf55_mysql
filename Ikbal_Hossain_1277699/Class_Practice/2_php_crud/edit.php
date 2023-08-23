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

        $id =$_REQUEST['id'];  // step: last 

        // $result = $db -> query("SELECT * FROM persons WHERE PersonID = '$id");
        // $row = $result -> fetch_assoc();

        // ei dui line ke echo "Successfully Updated ar porer line a bosano holo. jete update er pore form ar data gula update hoye jaoyar por je obosthay thakbe sei vabei dekhabe.


        if(isset($_POST['update'])){ // step:01
            extract($_POST);
            

            // echo  "INSERT INTO persons VALUES (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob')";
            // $db -> query($sql);

           // echo  "UPDATE persons SET LastName ='$lname', FirstName = '$fname', Address = '$address', City = '$city', email_address = '$email', dob = '$dob' WHERE PersonID = '$id' ";


           // step: 02
           $sql = "UPDATE persons SET LastName ='$lname', FirstName = '$fname', gender = '$gender', Address = '$address', City = '$city', email_address = '$email', dob = '$dob' WHERE person_id = '$id' ";

           // step:03
           $db -> query($sql);

        //    echo $db -> affected_rows;  // step: 3 after submission form. check for alert
            
        // step: 04
            if($db -> affected_rows){
                echo "<h3> Successfully Updated </h3> ";
            }
        }

        // step: 05
        $result = $db -> query("SELECT * FROM persons WHERE person_id = '$id'");
        $row = $result -> fetch_assoc();
    ?>

    <!-- This page you need to copy entry_form.php so that you can edit this form here  -->

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        FirstName: <input type="text" name="fname" value="<?php echo $row['FirstName'] ?>" placeholder="Enter LastName"> <br>

        LastName: <input type="text" name="lname" value="<?php echo $row['LastName'] ?>" placeholder="Enter LastName"> <br>

        Gender:  Male <input type="radio" name="gender" value="Male" <?php echo ($row['gender'] == 'Male') ? 'checked' : ""; ?> >
                Female <input type="radio" name="gender" value="Female" <?php echo ($row['gender'] == 'Female') ? 'checked' : ""; ?>> <br>

        Address: <br> <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea> <br>

        City: <select name="city" id="">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['City'] == 'Dhaka') echo "selected"; ?> > Dhaka </option>
            <option value="Khulna" <?php if($row['City'] == 'Khulna') echo "selected"; ?> > Khulna </option>
            <option value="Lakshmipur" <?php if($row['City'] == 'Lakshmipur') echo "selected"; ?> > Lakshmipur 
        </option>
        </select> <br>

        email_address: <input type="email" name="email" value="<?php echo $row['email_address'] ?>" placeholder="Enter email"> <br>

        dob: <input type="date" name="dob" value="<?php echo $row['dob'] ?>" placeholder="Enter date"> <br>

        <input type="submit" name="update" value = "Update"> <br>

        <input type= "hidden" value = " <?php echo $row['person_id'] ?>" name = "id" >

    </form>
</body>
</html>