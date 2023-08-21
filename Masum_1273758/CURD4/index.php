
<?php 
require_once("db_config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
    
    $sql ="SELECT * FROM  student_details ";
    $result =$myDB->query($sql);
    ?>
<div class="container">
    <h1>Student Admission Information</h1>
    <a class="btn  btn-success mb-2" href="Entry_form.php">Inserted</a>
<table class="table  table-info table-striped">
  <thead>
    <tr>
      <th scope="col">StudentID</th>
      <th scope="col">Name</th>
     <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Department</th>
      <th scope="col">Action</th>
 	 </tr>
</thead>
  <tbody>
    <?php 
    while($row =$result->fetch_object()){
    ?>
    <tr>
      <th><?php echo $row->StudentID  ?></th>
      <td><?php echo $row->FirstName."".$row->LastName ?></td>
     <td><?php echo $row->Email ?></td>
      <th><?php echo $row->Phone_Number?></th>
      <td><?php echo $row->FatherName ?></td>
      <td><?php echo $row-> MotherName ?></td>
         <td><?php echo $row->Address ?></td>
      <td><?php echo $row->City ?></td>
      <td><?php echo $row->Department ?></td>
      <td><a class="btn btn-success" href="edit.php?id=<?php echo $row->StudentID ?>">Edit</a><a class="btn btn-danger" href="delete.php?id= <?php echo $row->StudentID ?>" onclick="return confirm('Are you sure Detete')">DELETE</a></td>
     </tr>
    <?php }?>
  </tbody>
</table>
</div>
</body>
</html>