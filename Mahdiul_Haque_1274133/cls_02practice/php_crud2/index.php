<?php 
    require_once("db_config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
       $sql = "SELECT * FROM persons";
       $result = $db->query($sql);
    ?>

<div class="container">
<h2>List of all persons</h2> 
  <a href="entry.php" class="btn btn-success">New Person Entry</a>        
  <table class="table table-striped">    

    <thead>
      <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>city_name</th>
        <th>phone</th>
        <th>dob</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    while($row = $result->fetch_object()): ?>
    <tr>
        <td><?php echo $row->PersonID ?></td>
        <td><?php echo $row->FirstName ?></td>
        <td><?php echo $row->Lastname ?></td>
        <td><?php echo $row->Address ?></td>
        <td><?php echo $row->city_name ?></td>
        <td><?php echo $row->phone ?></td>
        <td><?php echo $row->dob ?></td>
        <td>
          <a class="btn btn-success" href="edit.php?id=<?php echo $row->PersonID ?>"><span class="glyphicon glyphicon-edit"></span></a>
          &nbsp;
          <a class="btn btn-danger" href="delete.php?id=<?php echo $row->PersonID ?>" onclick="return confirm('Are you sure to delete')"><span class="glyphicon glyphicon-trash"></span></a>
        </td>	 	 	 	 
      </tr>
      <?php  endwhile; ?>
    </tbody>
  </table>
</div>

</body>
</html>
