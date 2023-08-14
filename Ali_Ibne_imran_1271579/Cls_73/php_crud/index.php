<?php 
    require_once("db_config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <?php 
       $sql =  "SELECT * FROM persons";
       $result = $db->query($sql);
    ?>

<div class="container">
  <h2>Persons Table</h2>
      
  <a href="entry_form.php" class="btn btn-success">New Person Entry</a><br><br>      
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Person ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Email</th>
        <th>Birth Day</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <?php 
        while($row = $result->fetch_object()){
    ?>

      <tr>
        <td><?php echo $row->PersonID ?></td>
        <td><?php echo $row->FirstName." ".$row->LastName ?></td>
        <td><?php echo $row->Address ?></td>
        <td><?php echo $row->City ?></td>
        <td><?php echo $row->email_address ?></td>
        <td><?php echo $row->dob ?></td>
        <td>
          <a href="edit.php?id=<?php echo $row->PersonID ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
          
          <a href="delete.php?id=<?php echo $row->PersonID ?>" class="btn btn-danger" onclick="return confirm('Are you sure DELETE ?')"><i class="fas fa-trash-alt"></i></a>
      </td>
      </tr>

    <?php }?>

    </tbody>
  </table>
</div>

</body>
</html>
