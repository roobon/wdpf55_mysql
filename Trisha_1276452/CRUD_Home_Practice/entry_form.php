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


        $sql = "INSERT INTO persons VALUES (NULL, 'fname', 'lname', 'adress', 'city', 'email')"
        $db ->query($sql);

        if($db->affected_rows){
            echo "Inserted";
        }
    }
    
    
    
    
    ?>





    <form action="">
        <input type="text" name = "fname" placeholder = "Enter First Name"><br>
        <input type="text" name = "lname" placeholder = "Enter Last Name"><br>
        <textarea name="adress" id="" cols="50" rows="05"></textarea>
        <select name="city" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Bogura">Bogura</option>
        </select>

        <input type="text" name = "email" placeholder = "Enter Your Email"><br>
        <input type="submit" name = "submit" value = "SUBMIT"><br>

    </form>
</body>
</html>


