<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Form</title>
</head>
<body>
    <h3>Person Entry Form</h3>
    
    <?php 
    
    if(isset($_POST['submit'])){
        extract($_POST);
        require_once("db_connection.php");


        $sql = "INSERT INTO persons VALUES (NULL, '$FirstName', '$LastName', '$Adress', '$City', '$Email')";
        $db->query($sql);

        if($db->affected_rows){
            echo "Inserted";
        }
    }

    ?>
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "post" >
        <input type="text" name = "FirstName" placeholder = "Enter First Name"><br><br>
        <input type="text" name = "LastName" placeholder = "Enter Last Name"><br><br>
        <textarea name="Adress" id="" cols="21" rows="05"></textarea>
         <br><br><select name="City" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Bogura">Bogura</option>
        </select> <br> <br>

        <input type="text" name = "Email" placeholder = "Enter Your Email"><br><br>
        <input type="submit" name = "submit" value = "SUBMIT"><br>

    </form>
</body>
</html>


