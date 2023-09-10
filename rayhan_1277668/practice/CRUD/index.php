<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index</title>
    <style>
      body{
        background-color: lightslategray;
      }
    </style>
</head>
<body>
  <?php 
    session_start();
    if( isset(  $_SESSION['insert_msg'] ) ){
      $msg_insert =  $_SESSION['insert_msg']; ?>
<div class="alert alert-success container mt-5" role="alert"> <?php echo $msg_insert ?> </div>

      <?php 
      unset(   $_SESSION['insert_msg']) ;
    }
    ?>


    <?php 
    if ( isset( $_SESSION['delete_msg'] ) ) {
      $msg_delete =  $_SESSION['delete_msg'] ; ?>

      <div class="alert alert-danger container mt-5" role="alert"> <?php  echo    $msg_delete ?> </div>

      <?php 
      unset( $_SESSION['delete_msg']) ;
      }
      ?>
    
   
    
    
  
  <div class="container text-center d-flex justify-content-around">
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
    $sl = 0 ;

    while(  $data = $result->fetch_assoc()) {


    
    ?>
    <tr>
      <th scope="row"> <?php  $sl++ ; echo $sl ; ?> </th>
      <td><?php echo $data['name']  ?> </td>
      <td><?php echo $data['year.']  ?></td>
      <td><?php echo $data['genre']  ?></td>
      <td>  <button class="btn btn-warning"> Edit </button>  
             <a class="btn btn-danger" href="delete.php?ID=<?php echo $data['id'] ?>">Delete</a> 
    </td>
    </tr>
    <?php  } ?>
    
  </tbody>
</table>

<div><a class="btn btn-dark p-3 mt-5" href="insert.php"> Insert Game Data </a></div>

</div>
</body>
</html>