

<?php 
require_once('db_config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php 
    $sql = "SELECT * FROM users";
    $result = $db->query($sql);
    
    ?>

<div class="container mt-3">
  <h2>List of all persons</h2>
  <a href="personEntry.php" class="btn-success" >Entry</a>
            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birth Date</th>
      </tr>
    </thead>
    <tbody>

    <?php 
    while($row = $result->fetch_object()):
    ?>
      <tr>
        <td><?php echo $row->ID?></td>
        <td><?php echo $row->Name?></td>
       
        <td><?php echo $row->Email?></td>
        <td><?php echo $row->dob?></td>
        <td> <a class="btn btn-success"  href="edit.php?id=<?php echo $row->ID ?>">Edit</a>
        &nbsp;
        <a class="btn btn-danger" href="delete.php?id=<?php echo $row->ID ?>" onclick="return confirm ('are you sure to delete?')">Delete</a></td>
     
        
      </tr>

      <?php endwhile; ?>



    </tbody>
  </table>
</div>

</body>
</html>
