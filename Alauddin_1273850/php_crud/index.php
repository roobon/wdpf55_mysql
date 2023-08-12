<?php require_once("db_confiq.php");?>
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
        $sql = "SELECT * FROM parsons";
        $result = $db->query($sql);
    ?>

<div class="container">
  <h2>List of all persons</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Email</th>
        <th>Birth Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
            while ($row = $result->fetch_object()): ?>
      <tr>
        <td><?php echo $row->PersonID ?></td>
        <td><?php echo $row->First_Name . " " . $row->Last_Name ?></td>
        <td><?php echo $row->Address ?></td>
        <td><?php echo $row->City ?></td>
        <td><?php echo $row->Email ?></td>
        <td><?php echo $row->DOB ?></td>
        
      </tr>
      <?php endwhile; ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
