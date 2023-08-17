<?php  require_once("db_connection.php");?>
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
    $sql=  "SELECT * FROM  persons";
    $result = $db->query($sql);
    ?>
    

<div class="container">
  <h2>Lis of all persons</h2> 
  <a href="entry.php" class="btn btn-success">New Person Entry</a>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>PersonID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Adress</th>
        <th>City</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        
    <?php 
    while ( $row = $result->fetch_object()): ?>
     <tr>
        <td><?php echo $row->PersonID ?></td>
        <td><?php echo $row->FirstName ?></td>
        <td><?php echo $row->LastName ?></td>
        <td><?php echo $row->Adress ?></td>
        <td><?php echo $row->City ?></td>
        <td><?php echo $row->Email ?></td>

    </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    </body>
    </html>

    
    
    ?>