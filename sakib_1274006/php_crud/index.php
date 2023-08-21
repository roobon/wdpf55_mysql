<?php 

require_once("db_config.php")

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
  <h2>List of all person</h2>
  <a href="person_entry_form.php" class="btn btn-success">New Person Entry</a>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>PersonID</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Email_address</th>
        <th>DOB</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
    <?php while($row = $result->fetch_object()){//:?>
   
    <tr>
        <td><?php echo $row->PersonID?></td>
        <td><?php echo $row->FirstName . " " .$row->LastName?></td>
        <td><?php echo $row->Address?></td>
        <td><?php echo $row->City?></td>
        <td><?php echo $row->Email_address?></td>
        <td><?php echo $row->DOB?></td>
        <td>
          <a class="btn btn-success" href="edit.php?id=<?php echo $row->PersonID?>"><span class="glyphicon glyphicon-edit"></span></a>
          &nbsp;
          <a class="btn btn-danger" href="delete.php?id=<?php echo $row->PersonID?>"
        onclick="return confirm('Are You Sure to Delete?')"><span class="glyphicon glyphicon-trash"></span></a></td>
      </tr>
      <?php } //endwhile; ?>

    </tbody>
  </table>
</div>

</body>
</html>
