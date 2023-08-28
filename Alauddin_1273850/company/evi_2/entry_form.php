<?php 
$db = new mysqli("localhost", "root", "", "isdb_bisew"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Entry Form</h3>
    <?php 
        if(isset($_POST['insert'])){
            extract($_POST);
            echo "CALL insert_student_info('$name', '$address', '$mobile')";
            $sql = "CALL insert_student_info('$name', '$address', '$mobile')";
            $db->query($sql);
            if($db->affected_rows>0){
                header("Inserted <br>");
            }
        }    
    
    ?>
    <form action="">
        <label for="">Name</label><br>
        <input type="text" name="name" placeholder="Enter Student Name"><br>

        <label for="">Addrerss</label><br>
        <textarea name="address" placeholder="Enter Address" cols="30" rows="10"></textarea><br>

        <label for="">Mobile Number</label><br>
        <input type="text" name="mobile" placeholder="Enter Your Phone Number"><br>

        <input type="submit" name="insert" value="INSERT">
    </form>
</body>
</html>