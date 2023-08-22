<?php 
  $db=  new mysqli("localhost", "root", "", "wdpf55_idb_bisew");
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
                <td><?php echo $row->ID; ?></td>
                <td><?php echo $row->Name; ?></td>
                <td><?php echo $row->Gender; ?></td>
                <td><?php echo $row->DOB; ?></td>
                <td><?php echo $row->Email; ?></td>
                <td><?php echo $row->Batch; ?></td>
                <td><?php echo $row->Address; ?></td>
                <td><?php echo $row->Hobbies; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row->ID; ?>">Edit</a>  
                    <a href="delete.php?id=<?php echo $row->ID; ?>" onclick="return confirm('Are you sure to delete')">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </table>
</body>
</html>