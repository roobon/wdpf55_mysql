
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
        require_once("connection.php"); 
         $id = $_REQUEST['id'];
       
        if(isset($_POST['update'])){
            extract($_POST);
            // echo "UPDATE persons  SET lname='$lname', fname='$fname', address='$address', city= '$city', email = '$email', dob='$dob' WHERE ID='$id'";
           $sql = "UPDATE person2  SET lname='$lname', fname='$fname', address='$address', city= '$city', email = '$email', dob='$dob' WHERE ID='$id'";
            $db->query($sql);
            if($db->affected_rows){
                header("Location:index.php");
            } 
            }

<<<<<<< HEAD
        $result = $db->query("SELECT * FROM persons WHERE ID='$id'");
=======
    
        
        $result = $db->query("SELECT * FROM person2 WHERE ID='$id'");
>>>>>>> 31c04c956610b9bfee8bbaaac66266a33928b65d
        $row = $result->fetch_assoc();
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="hidden" name="id" value = "<?php echo $row['ID'];?>">   
    <input type="text" name="lname" placeholder="Enter First Name" value="<?php echo  $row['lname'] ?>"><br>
        <input type="text" name="fname" placeholder="Enter Last Name" value="<?php echo  $row['fname'] ?>"><br>
        <textarea name="address" cols="30" rows="10"><?php echo  $row['address'] ?></textarea><br>
        <select name="city">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['city']=='Dhaka') echo "selected"; ?>>Dhaka</option>
            <option value="Khulna" <?php if($row['city']=='Khulna') echo "selected"; ?>>Khulna</option>
            <option value="Rajshahi" <?php if($row['city']=='Rajshahi') echo "selected"; ?>>Rajshahi</option>
            <option value="Cumilla" <?php if($row['city']=='Cumilla') echo "selected"; ?>>Cumilla</option>
            <option value="Noakhali" <?php if($row['city']=='Noakhali') echo "selected"; ?>>Noakhali</option>
        </select><br>
        <input type="text" name="email" placeholder="Enter email address" value="<?php echo  $row['email'] ?>"><br>
        <input type="date" name="dob" placeholder="Enter date" value="<?php echo  $row['dob'] ?>"><br>
        <input type="submit" name="update" value="UPDATE">
        
        
    </form>
</body>
</html>