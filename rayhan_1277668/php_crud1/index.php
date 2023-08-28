<?php 
    $db = new mysqli("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
       $sql = "SELECT * FROM students";
       $result = $db->query($sql);
    ?>
    <div class="container">
    <h2>List of all persons</h2>
  <a href="entry.php" class="btn btn-success">New Person Entry</a> 
    <table  class="table table-striped">
        <thead>
        <tr>
            <th>ST_ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Batch</th>
            <th>Address</th>
            <th>Hobbies</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_object()):?>
        <tr>
            <td><?php echo $row->ID ?></td>
            <td><?php echo $row->Name ?></td>
            <td><?php echo $row->Gender ?></td>
            <td><?php echo $row->DOB ?></td>
            <td><?php echo $row->Email ?></td>
            <td><?php echo $row->Batch ?></td>
            <td><?php echo $row->Address ?></td>
            <td><?php echo $row->Hobbies ?></td>
            <td><a class="btn btn-success" href="edit.php?id=<?php echo $row->ID ?>"><span class="glyphicon glyphicon-edit"></span></a>
        &nbsp;
        <a class="btn btn-danger" href="delete.php?id=<?php echo $row->ID ?>" onclick="return confirm('Are you sure to delete')"><span class="glyphicon glyphicon-trash"></span></a></td>	 	 	 	 
      </tr>

        <?php endwhile; ?>
        </tbody>
        
    </table>
    </div>
   
</body>
</html>