<?php 
require_once("config.php");
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
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>address</th>
        <th>city</th>
        <th>Email</th>
        <th>Birth Date</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        while ($row = $result->fetch_object()){ 
        ?>
      <tr>
        <td></td>
        <td><?php echo $row->PersonID?></td>
        <td><?php echo $row->FirstName."".$row->LastName?></td>
        <td><?php echo $row->Address?></td>
        <td><?php echo $row->city?></td>
        <td><?php echo $row->Email?></td>
        <td></td>
        <td></td>
      </tr>
      <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
