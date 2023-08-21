<?php 
$db = new mysqli ("localhost","root","","idb_bisew_wdpf55");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php 
     $sql = "SELECT * FROM students";
        $result = $db->query($sql);
    ?>
    <h2>Students List</h2>
`    <table border="1">
        

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
       <?php 
        while($row = $result->fetch_object()){?>
        <tr>
            <td><?php echo $row->ID?></td>
            <td><?php echo $row->Name?></td>
            <td><?php echo $row->Gender?></td>
            <td><?php echo $row->Dob?></td>
            <td><?php echo $row->Email?></td>
            <td><?php echo $row->Batch?></td>
            <td><?php echo $row->Address?></td>
            <td><?php echo $row->Hobbies?></td>
            <td>
                <a class="btn btn-success" href="index.php? id=<?php echo $row->ID?>">Edit</a>
                 <a class="btn btn-danger" href="delete.php?id=<?php echo $row->ID?>" onclick="return confirm('Are you sure to delete')">Delete</a>
     </td>
         </tr>
        <?php }?>
     
    </table>
    
    


   



    
</body>
</html>
