<?php 

$db = new mysqli("localhost", "root", "", "idb_bisew" );


if ( isset( $_POST['submit']) ) {
    extract($_POST);
    
    // $sql = " INSERT INTO manufacturer VALUES ( NULL, '$name', '$address', '$contact' ) " ;

    $sql = "CALL insert_company_info('$name', '$address', '$contact' )";

    $db->query($sql);

    if ( $db->affected_rows ) {
        header("Location:manufacturer.php");
    }

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Manufacturer Entry Form </h3>
    <form action="" method="post">
    <input type="text" name="name" placeholder="Company Name"> <br>
    <textarea name="address"  cols="20" rows="5" placeholder="Company Address"></textarea>  <br>
    <input type="number" name="contact" placeholder="Contact Number"> <br>

    <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>