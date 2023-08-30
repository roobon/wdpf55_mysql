<?php 
require_once("db_config.php");
if(isset($_POST["submit"])){
extract($_POST);
$sql = "INSERT INTO students VALUE(NULL, '$name', '$gender', '$batch', '$phone', '$email')";
$db->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Entry Form</title>
</head>
<body>
    <h2>Students Entry Form</h2>
    <form action="" method="post">
        Name : 
        <input type="text" name="name"><br>

        Gender :
        Male 
        <input type="radio" name="gender" value="Male">
        Female 
        <input type="radio" name="gender" value="Female"><br>

        Batch :
        <select name="batch">
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
        </select><br>

        Phone :
        <input type="text" name="phone"><br>

        Email :
        <input type="email" name="email"><br>

        <input type="submit" value="SUBMIT" name="submit">
    </form>
</body>
</html>