<?php 
    $db = new mysqli("localhost", "root", "", "sadid2");

    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['dropdown'];
        $db->query("DELETE ");
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <form method="post">
        <select name="dropdown" id="">
            <option value="2"></option>
        </select>
        <input type="submit" name="delete" value="DELETE">
    </form>
</body>
</html>