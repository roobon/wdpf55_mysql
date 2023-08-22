<?php 
include_once("db_config.php");
$sql = "SELECT * FROM students";
$result=$db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Index</title>
</head>
<body>
    <h1>CRUD Self Practice</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Batch</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_object()){ ?>

            <tr>
                <td><?php echo $row->id?></td>
                <td><?php echo $row->name?></td>
                <td><?php echo $row->gender?></td>
                <td><?php echo $row->batch?></td>
                <td><?php echo $row->phone?></td>
                <td><?php echo $row->email?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row->id?>" target="_blank"><?php ?>Edit</a>
                    <a href="delete.php?id=<?php echo $row->id?>"><?php ?>Delete</a>
                </td>
            </tr>

            <?php }?>
        </tbody>
    </table>
    <a href="entry.php" target="_blank">Enter New Student Info</a>
</body>
</html>