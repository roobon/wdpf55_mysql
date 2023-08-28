<?php 
    $db = new mysqli("localhost", "root", "", "mysql_evidence");
    $result = $db->query("SELECT * FROM manufecturer_product WHERE price>5000")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>View Data</title>
</head>
<body>
    <h2 class="text-center my-4">Product List</h2>
<table class="table container ">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Address</th>
      <th scope="col">Contact No</th>
    </tr>
  </thead>
  <tbody>
    <?php $sn = 1; while($row = $result->fetch_object()): ?>
    <tr>
      <th scope="row"><?php echo $sn; $sn++;?></th>
      <th scope="row"><?php echo $row->companyName?></th>
      <td><?php echo $row->p_name?></td>
      <td><?php echo $row->price?></td>
      <td><?php echo $row->address?></td>
      <td><?php echo $row->contactNo?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>