<?php 
    require_once("db_config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php 
       $sql =  "SELECT * FROM persons";
       $result = $db->query($sql);
    ?>

<div class="container">
  <h2>Dark Striped Table</h2>
  <p>Combine .table-dark and .table-striped to create a dark, striped table:</p>            
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
      </tr>

    <?php }?>

    </tbody>
  </table>
</div>

</body>
</html>
