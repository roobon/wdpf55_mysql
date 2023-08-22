<?php  require_once("db_config.php");  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php    

$sql =  "SELECT * FROM persons ";
$result = $myDB->query($sql);

?>


<div class="jumbotron jumbotron-fluid">
<div class="container">



<h2>List Of person</h2>

<a class="btn btn-success" href="entry_form.php"> Insert Persons </a>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Address</th>
      <th>City</th>
      <th>Email_address</th>
      <th>Date Of Birth</th>
      <th>Phone</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  while($row = $result->fetch_object()){ ?>

    <tr>
      <td> <?php  echo  $row->PersonID ?> </td>
      <td> <?php  echo  $row->firstName ?> </td>
      <td> <?php  echo  $row->Address ?> </td>
      <td> <?php  echo  $row->City ?> </td>
      <td> <?php  echo  $row->email_address ?> </td>
      <td> <?php  echo  $row->DateOfBirth ?> </td>
      <td> <?php  echo  $row->phone ?> </td>
      <td>  <a href="edit.php?id=<?php  echo  $row->PersonID ?>" class="btn btn-primary"> Edit </a> 

      
      <a onclick="return confirm('are you sure..!! Data will be Deleted Permanently') " href="delete.php?id=<?php  echo  $row->PersonID ?>" class="btn btn-danger"> Delete </a>
    </td>
     
    </tr>
    <?php } ?>
 
  </tbody>
</table>

</div>

</div>


</body>
</html>
