<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Person Edit Form</h3>
    <?php 
        require_once('db_config.php');
        $id = $_REQUEST['id'];

        if(isset($_POST['update'])){
           extract($_POST);
            $sql = "UPDATE persons SET Last_Name='$lastname', First_Name='$firstname', Address='$address', City='$city', Email='$email', DOB='$dob' WHERE PersonID='$id'";

            $db->query($sql);
            // header("Location:index.php");

            if($db->affected_rows){
                echo "updated Successfully";
            }

        } 
        
        $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'");
        $row = $result->fetch_assoc();

    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    
        <label for="">Last Name</label><br>
        <input type="text" name="lastname" placeholder="Enter your lastname" value="<?php echo $row['Last_Name']?>"><br>

        <label for="">First Name</label><br>
        <input type="text" name="firstname" placeholder="Enter your firstname" value="<?php echo $row['First_Name']?>"><br>

        <label for="">Address</label><br>
        <textarea name="address" placeholder="Enter your address" id="" cols="30" rows="10"><?php echo $row['Address']?></textarea><br>

        <label for="">City</label><br>
        <select name="city">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['City']=='Dhaka') echo "selected"; ?>>Dhaka</option>
            <option value="Comilla" <?php if($row['City']=='Comilla') echo "selected"; ?>>Comilla</option>
            <option value="Chandpur" <?php if($row['City']=='Chandpur') echo "selected"; ?>>Chandpur</option>
            <option value="Chittagoan" <?php if($row['City']=='Chittagoan') echo "selected"; ?>>Chittagoan</option>
            <option value="Sylet" <?php if($row['City']=='Sylet') echo "selected"; ?>>Sylet</option>
            <option value="Barishal" <?php if($row['City']=='Barishal') echo "selected"; ?>>Barishal</option>
            <option value="Noakhali" <?php if($row['City']=='Noakhali') echo "selected"; ?>>Noakhali</option>
        </select><br>

        <label for="">Email Addess</label><br>
        <input type="text" name="email" placeholder="Enter your email"  value="<?php echo $row['Email']?>"><br>

        <label for="">Dtae of Birth</label><br>
        <input type="date" name="dob" placeholder="Enter date of birth" value="<?php echo $row['DOB']?>"><br>

        <input type="submit" name="update" value="UPDATE">
        <input type="hidden" name="id" value="<?php echo $row['PersonID'] ?>">

    </form>
</body>
</html>