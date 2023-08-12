<?php 
include_once("db_config.php");
$sql = "SELECT * FROM students";
$result=$db->query($sql);
//print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD SELF Practice</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_object()){ ?>

            <tr>
                <td><?php echo $row->ID?></td>
                <td><?php echo $row->Name?></td>
                <td><?php echo $row->Phone?></td>
                <td><?php echo $row->Email?></td>
                <td><?php  ?></td>
            </tr>

            <?php }?>
        </tbody>
    </table>
</body>
</html>