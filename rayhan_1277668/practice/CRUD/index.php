<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<div class="container text-center">
<table class="table table-dark table-striped mt-5 w-75">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Year</th>
      <th scope="col">Genre</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    require("db-config.php") ;
    $sql = "SELECT * FROM games " ;
    $result =  $db->query($sql);

    while(  $data = $result->fetch_assoc()) {

    
    
    ?>
    <tr>
      <th scope="row"> </th>
      <td><?php echo $data['name']  ?> </td>
      <td><?php echo $data['year.']  ?></td>
      <td><?php echo $data['genre']  ?></td>
      <td>  </td>
    </tr>
    <?php  } ?>
    
  </tbody>
</table>
</div>
</body>
</html>