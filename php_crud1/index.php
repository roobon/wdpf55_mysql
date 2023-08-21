<?php 
  $db=  new mysqli("localhost", "root", "", "idb_bisew_wdpf55");
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
            $sql = "SELECT * FROM students";
            $result = $db->query($sql);
        ?>
        <a href="entry.php">New Student Entry</a><br>
        <br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <?php 
                while($row=$result->fetch_object()){  
            ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->name; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row->id; ?>">Edit</a>  
                    <a href="delete.php?id=<?php echo $row->id; ?>" onclick="return confirm('Are you sure to delete')">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </table>
</body>
</html>