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
            require_once('db_config.php');

            $sql = "INSERT INTO persons VALUE(NULL, '$lastname', '$firstname', '$address', '$city', '$email', '$dob' )";

            $db->query($sql);
            // header("Location:index.php");

            if($db->affected_rows){
                echo "Inserted";
            }

        }    

    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    
        <label for="">Last Name</label><br>
        <input type="text" name="lastname" placeholder="Enter your lastname"><br>

        <label for="">First Name</label><br>
        <input type="text" name="firstname" placeholder="Enter your firstname"><br>

        <label for="">Address</label><br>
        <textarea name="address" placeholder="Enter your address" id="" cols="30" rows="10"></textarea><br>

        <label for="">City</label><br>
        <select name="city" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Comilla">Comilla</option>
            <option value="Chittagoan">Chittagoan</option>
            <option value="Sylet">Sylet</option>
            <option value="Barishal">Barishal</option>
            <option value="Noakhali">Noakhali</option>
        </select><br>

        <label for="">Email Addess</label><br>
        <input type="text" name="email" placeholder="Enter your email"><br>

        <label for="">Dtae of Birth</label><br>
        <input type="date" name="dob" placeholder="Enter date of birth"><br>

        <input type="submit" name="submit" value="SUBMIT">

    </form>
</body>
</html>