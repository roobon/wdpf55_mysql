<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
     require_once("db_config.php");
      $id = $_REQUEST['id']; 
      
      $result = $db->query("SELECT * FROM persons WHERE PersonID = '$id' ");

      if(isset($_POST['update'])){
        extract($_POST);

        $sql = "UPDATE persons SET ,FristtName='$fname' LastName='$lname',Address = '$address', City= '$city', EmailAdress = '$email', Dob = '$dob' WHERE PersonID='$id'";
        $db->query($sql); 
         
        if($db->affected_rows){
            echo "Update Successfully";
        }

      }

      $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'");
      $row = $result->fetch_assoc();
     ?>

<form action= "<?php echo $_SERVER ['PHP_SELF'] ?>" method="post" >
    <input type="text" name="fname" placeholder="Enter First Name" value ="<?php echo $row['FirsttName']?>"> <br>
    <input type="text" name="lname" placeholder="Enter Last Name" value ="<?php echo $row['lastName']?>"> <br>
     <textarea name="address" cols="10" rows="10" <?php echo $row['Address']?>"></textarea><br>

    <select name="City">
        <option value="">Select One</option>
        <option value="Dhaka" <?php if($row['$city']== 'Dhaka') echo "Selected"?>>Dhaka</option>
        <option value="Khulna"<?php if($row['$city']== 'Khulna') echo "Selected"?>>Khulna</option>
        <option value="Khulna"<?php if($row['$city']== 'Chitgong') echo "Selected"?>>Chitagong</option>
        
    </select> <br>

    <input type="text" name="email" placeholder="Enter email adress"value ="<?php echo $row['EmailAdress']?>"> <br>
    <input type="date" name="dob" placeholder="Enter date"value ="<?php echo $row['dob']?>"> <br>
    <input type="submit" name="update" placeholder="Update">
    <input type="hidden" name="id"value ="<?php echo $row['PersonID']?>">
    </form>
</body>
</html>
</body>
</html>