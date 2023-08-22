<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Form</title>
</head>
<body>
    <h3>Update</h3>
    
    <?php 
    
    require_once("db_connection.php");
    $id = $_REQUEST['id'];
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "UPDATE persons SET FirstName ='$FirstName', LastName = '$LastName',Adress= '$Adress', City='$City', Email ='$Email'";
        $db->query($sql);



        if($db->affected_rows){
            echo "Inserted";
        }
    }


    $result = $db->query("SELECT* FROM persons WHERE 
    PersonID = '$id'");

    $row = $result->fetch_assoc();

    ?>
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "post" >
        <input type="hidden" name = "id"value ="<?php echo $row['PersonID'] ?>"> 
        <input type="text" name = "FirstName" placeholder = "Enter First Name"value ="<?php echo $row['FirstName']?>"><br><br>
        <input type="text" name = "LastName" placeholder = "Enter Last Name"value ="<?php echo $row['LastName'] ?>"><br><br>
        <textarea name="Adress" id="" cols="21" rows="05"><?php echo $row['Adress'] ?></textarea>
         <br><br><select name="City" id="">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['City']=='Dhaka') echo "selected"?>>Dhaka</option>
            <option value="Khulna"<?php if($row['City']=='Khulna') echo "selected"?>>Khulna</option>
            <option value="Sylhet"<?php if($row['City']=='Sylhet') echo "selected"?>>Sylhet</option>
            <option value="Bogura"<?php if($row['City']=='Bogura') echo "selected"?>>Bogura</option>
        </select> <br> <br>

        <input type="text" name = "Email" placeholder = "Enter Your Email"value ="<?php echo $row['Email'] ?>"><br><br>
        <input type="submit" name = "submit" value = "SUBMIT"><br>

    </form>
</body>
</html>


