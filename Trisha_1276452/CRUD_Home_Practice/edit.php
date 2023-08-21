<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Update Data</h3>


    <?php
     require_once("db_connection.php"); 
     $id = $_REQUEST['id'];
       
   
    if(isset($_POST['update'])){
        extract($POST);
       $sql = "UPDATE persons  SET FirstName='$fname', LastName='$lname', Adress='$address', City='$city', Email = '$email' WHERE PersonID='$id'";
      if($db->query($sql)){

       
        echo "Updated Succcessfully";
       }else{
        echo 'problem';
       }
    }
    
    $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'");
    $row = $result->fetch_assoc();
    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    ID: <input type="text" value="<?php echo $row['PersonID'] ?>" name="id" readonly><br>    
    <input type="text" name="fname" placeholder="Enter First Name" value="<?php echo  $row['FirstName'] ?>"><br>
        <input type="text" name="lname" placeholder="Enter Last Name" value="<?php echo  $row['LastName'] ?>"><br>
        <textarea name="address" cols="30" rows="10"><?php echo  $row['Adress'] ?></textarea><br>
        <select name="city">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['City']=='Dhaka') echo "selected"; ?>>Dhaka</option>
            <option value="Khulna" <?php if($row['City']=='Khulna') echo "selected"; ?>>Khulna</option>
            <option value="Rajshahi" <?php if($row['City']=='Rajshahi') echo "selected"; ?>>Rajshahi</option>
            <option value="Cumilla" <?php if($row['City']=='Cumilla') echo "selected"; ?>>Cumilla</option>
            <option value="Noakhali" <?php if($row['City']=='Noakhali') echo "selected"; ?>>Noakhali</option>
        </select><br>
        <input type="text" name="email" placeholder="Enter email address" value="<?php echo  $row['Email'] ?>"><br>
        <input type="submit" name="update" value="UPDATE">
        
    </form>
</body>
</html>
</body>
</html>