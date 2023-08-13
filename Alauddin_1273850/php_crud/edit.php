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
        require_once('db_config.php');

        $id = $_GET['id'];

        $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'");
        $row = $result->fetch_assoc();
    
        if(isset($_POST['submit'])){
           extract($_POST);
            

            //$sql = "INSERT INTO persons VALUE(NULL, '$lastname', '$firstname', '$address', '$city', '$email', '$dob' )";

            $db->query($sql);
            // header("Location:index.php");

            if($db->affected_rows){
                echo "Inserted";
            }

        }    

    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    
        <label for="">Last Name</label><br>
        <input type="text" name="lastname" placeholder="Enter your lastname" value="<?php echo $row['Last_Name']?>"><br>

        <label for="">First Name</label><br>
        <input type="text" name="firstname" placeholder="Enter your firstname" value="<?php echo $row['First_Name']?>"><br>

        <label for="">Address</label><br>
        <textarea name="address" placeholder="Enter your address" value="<?php echo $row['Address']?>" id="" cols="30" rows="10"></textarea><br>

        <label for="">City</label><br>
        <select name="city"  value="<?php echo $row['City']?>" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Comilla">Comilla</option>
            <option value="Chittagoan">Chittagoan</option>
            <option value="Sylet">Sylet</option>
            <option value="Barishal">Barishal</option>
            <option value="Noakhali">Noakhali</option>
        </select><br>

        <label for="">Email Addess</label><br>
        <input type="text" name="email" placeholder="Enter your email"  value="<?php echo $row['Email']?>"><br>

        <label for="">Dtae of Birth</label><br>
        <input type="date" name="dob" placeholder="Enter date of birth" value="<?php echo $row['DOB']?>"><br>

        <input type="submit" name="submit" value="UPDATE">

    </form>
</body>
</html>