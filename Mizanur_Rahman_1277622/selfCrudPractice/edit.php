<?php 
require_once("db_config.php");
if(isset($_POST["update"])){
extract($_POST);
echo "UPDATE students SET name = '$name', gender = '$gender', batch = '$batch', phone = '$phone', email = '$email' WHERE id = '$id' ";
$sql = "UPDATE students SET name = '$name', gender = '$gender', batch = '$batch', phone = '$phone', email = '$email' WHERE id = '$id' ";
$db->query($sql);
}
$result = $db->query("SELECT * FROM students WHERE id = 'id' ");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Data Update Form</title>
</head>
<body>
    <h2>Students Data Update Form</h2>
    <form action="" method="post">
        Name : 
        <input type="text" name="snames"><br>

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

        <input type="submit" value="UPDATE" name="update">

        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
    </form>
</body>
</html>