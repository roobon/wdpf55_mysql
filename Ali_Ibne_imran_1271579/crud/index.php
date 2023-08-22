<!DOCTYPE html>
<html lang="en">
<head>
  <title>Person Entry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Students Information</h2>

            <?php 
            require_once("connection.php");
            $sql =  "SELECT * FROM students";
            $result = $db->query($sql);
            ?>  

            <a href="entry.php" class="btn btn-success">New Entry</a><br><br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Batch</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Birth Day</th>
                    <th>Hobbies</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                    while($row = $result->fetch_object()){
                ?>

                <tr>
                    <td><?php echo $row->st_id ?></td>
                    <td><?php echo $row->Name ?></td>
                    <td><?php echo $row->Batch ?></td>
                    <td><?php echo $row->Gender?></td>
                    <td><?php echo $row->Address ?></td>
                    <td><?php echo $row->Email?></td>
                    <td><?php echo $row->Dob?></td>
                    <td><?php echo $row->Hobbies?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row->st_id?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    
                    <a href="delete.php?id=<?php echo $row->st_id?>" class="btn btn-danger" onclick="return confirm('Are you sure DELETE ?')"><i class="fas fa-trash-alt"></i></a>
                </td>
                </tr>

            <?php }?>

            </tbody>
        </table>
    </div>
    
</body>
</html>
