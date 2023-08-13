<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Person Entry</h3>


    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        require_once("db_config.php");

        $sql ="INSERT INTO persons VALUE (NULL, '$lname' , '$fname', '$address', '$city' , '$email' , '$dob')";
        $db->query($sql);

        if($db->affected_rows){
            echo "Inserted";
        }
    }
    
    ?>
    <form = action"<?php echo $_SERVER ['PHP_SELF'] ?>" method="post" >
    <input type="text" name="lname" placeholder="Enter Lirst Name"> <br>
    <input type="text" name="fname" placeholder="Enter First Name"> <br>
     <textarea name="address" id="" cols="10" rows="10"></textarea> 

     <br><select name="city">
        <option value="">Select One</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Khulna">Khulna</option>
    </select> <br>

    <input type="text" name="email" placeholder="Enter email adress"> <br>
    <input type="date" name="dob" placeholder="Enter date"> <br>
    <input type="submit" name="submit" placeholder="SUBMIT">
    </form>
</body>
</html>