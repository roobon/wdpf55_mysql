<?php

$db =  new mysqli("localhost", "root", "", "auth_users");
if ( isset( $_POST['submit']) ) {
    extract($_POST);
    
    // $sql = " INSERT INTO student VALUES ( NULL, '$name', '$address', '$mobile' ) " ;

    $sql = "CALL insert_student_info('$name', '$address', '$mobile' )";

    $db->query($sql);

    if ( $db->affected_rows ) {
        header("Location:dashboard.php");
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entry</title>
</head>
<body>
    <h3> Student Entry Form </h3>
<form action="" method="post">
    <input type="text" name="name" placeholder="Student Name"> <br>
    <textarea name="address"  cols="20" rows="5" placeholder="Student Address"></textarea>  <br>
    <input type="number" name="mobile" placeholder="Contact Number"> <br>

    <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>