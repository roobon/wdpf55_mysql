<?php 
 $db = new mysqli("localhost", "root", "", "evaly");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <!-- student display with table start -->

<body>
    <?php 
    $sql = "SELECT * FROM students";
    $result = $db->query($sql);
    ?>

<div class="container">
  <h2>List of all persons</h2>
  <a href="entryform.php" class="btn btn-success">New Person Entry</a>
      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Dob</th>
        <th>Email</th>
        <th>Batch</th>
        <th>Address</th>
        <th>Hobbies</th>
        <th>Action</th>
      </tr>
    </thead>

      
    <tbody>
      <?php 
       while($row = $result->fetch_object()){     

                                              // while er holud brackete e por semicolon die 
                                               // porer php er sathe endwhile likhe colon dileo data thake
      
      ?>


      <tr>
        <td><?php echo $row->id ?></td>
        <td><?php echo $row->name ?></td>
        <td><?php echo $row->gender?></td>
        <td><?php echo $row->dob?></td>
        <td><?php echo $row->email?></td>
        <td><?php echo $row->batch?></td>
        <td><?php echo $row->address?></td>
        <td><?php echo $row->hobbies	 ?></td>
        <td>
        <a class="btn btn-success" href="edit.php?id=<?php echo $row->id ?>">Edit</a>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $row->id ?>"onclick="return confirm('Are you sure to DELETE')">Delete</a>
        </td>
       
                                    <!-- icon kote hobe -->
      </tr>
       <?php }?>  


      
      
    </tbody>
  </table>
</div>

 
   
   
</body>
</html>