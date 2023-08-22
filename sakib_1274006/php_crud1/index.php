<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "wdpf55";


$db = new mysqli($host, $user, $pass, $database);

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

<!-- Student Display with Table Start -->
<?php 
    
    $sql = "SELECT * FROM idb_bisew_wdpf55";
    $result = $db->query($sql);
    
    ?>
<!-- ID	Name	Gender	DOB	Email	Batch	Address	Hobbies -->
<div class="container">
  <h2>List of all person</h2>
  <a href="entry_form.php" class="btn btn-success">New Person Entry</a>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
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

    <?php while($row = $result->fetch_object()){//:?>
      
     
    <tr>
        <td><?php echo $row->ID?></td>
        <td><?php echo $row->Name?></td>
        <td><?php echo $row->Gender?></td>
        <td><?php echo $row->DOB?></td>
        <td><?php echo $row->Email?></td>
        <td><?php echo $row->Batch?></td>
        <td><?php echo $row->Address?></td>
        <td><?php echo $row->Hobbies?></td>

        <td>
          <a class="btn btn-success" href="edit.php?id=<?php echo $row->ID;?>"><span class="glyphicon glyphicon-edit"></span></a>
          &nbsp;
          <a class="btn btn-danger" href="delete.php?id=<?php echo $row->ID;?>"
        onclick="return confirm('Are You Sure to Delete?')"><span class="glyphicon glyphicon-trash"></span></a></td>
      </tr>

      <?php } ?>
    </tbody>
  </table>
</div>
<!-- Student Display with Table End -->



</body>
</html>
