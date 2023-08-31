<?php
$db = new mysqli("localhost", "root", "", "evidence");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql = "INSERT INTO manufacturer VALUES(NULL, '$company', '$address', '$contact_no')";
        $db->query($sql);
        if ($db->affected_rows > 0) {
            echo "Success";
        }
    }

    ?>
    <form action="" method="post">
        <input type="text" name="company" id="" placeholder="Company Name">
        <input type="text" name="address" id="" placeholder="Address">
        <input type="text" name="contact_no" id="" placeholder="Phone">
        <input type="submit" name="submit" id="" value="SUBMIT">
    </form>
</body>

</html>