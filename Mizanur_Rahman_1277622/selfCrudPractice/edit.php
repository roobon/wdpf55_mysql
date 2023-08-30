<?php 
require_once("db_config.php");
$id = $_REQUEST['id'];
if(isset($_POST["update"])){
extract($_POST);
echo "UPDATE students SET studentname = '$name', gender = '$gender', batch = '$batch', phone = '$phone', email = '$email' WHERE id = '$id' ";
$sql = "UPDATE students SET studentname = '$name', gender = '$gender', batch = '$batch', phone = '$phone', email = '$email' WHERE id = '$id' ";
$db->query($sql);
}
$result = $db->query("SELECT * FROM students WHERE id = '$id' ");
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
        <input type="text" name="name" value="<?php echo $row["studentname"] ?>"><br>
            
        Gender :
        Male 
        <input type="radio" name="gender" value="Male" <?php echo ($row["gender"]== "Male")? "checked" : ""; ?>>
        Female 
        <input type="radio" name="gender" value="Female" <?php echo ($row["gender"]== "Female")? "checked" : ""; ?>><br>

        Batch :
        <select name="batch">
            <option value="50" <?php if ($row["batch"] == "50") echo "selected"; ?>>50</option>
            <option value="51" <?php if ($row["batch"] == "51") echo "selected"; ?>>51</option>
            <option value="52" <?php if ($row["batch"] == "52") echo "selected"; ?>>52</option>
            <option value="53" <?php if ($row["batch"] == "53") echo "selected"; ?>>53</option>
            <option value="54" <?php if ($row["batch"] == "54") echo "selected"; ?>>54</option>
        </select><br>

        Phone :
        <input type="text" name="phone" value="<?php echo $row["phone"] ?>"><br>

        Email :
        <input type="email" name="email" value="<?php echo $row["email"] ?>"><br>

        <input type="submit" value="UPDATE" name="update">

        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
    </form>
</body>
</html>