
</html>
<?php 
$db = new mysqli('localhost', 'root', '', 'idb_bisew');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student</title>
</head>
<body>
    <form action="" method="post" class="container">
        <h2>Student List</h2>
     

       <?php 
        if(isset($_REQUEST['delete'])):
        $id =   $_POST['student'];                                                                                                       
        $db->query("DELETE FROM student WHERE id = '$student_id'");
        if($db->affected_rows>0){
            echo "DELETED";
        }
        endif;
       ?>
       <select name="student">
       <option value="">Select One</option>
       <?php 
     $result = $db->query( "SELECT * FROM student");

     while($row = $result->fetch_assoc()):
       ?>
       <option value="<?php echo $row['student_id'];?>"><?php echo $row['name'];?> </option>
       <?php endwhile?>
       </select>
       <input type="submit" name="delete" value="DELETE" id="">
    </form>

   

    <?php 
$sql = "SELECT * FROM ch_product";
$result = $db->query($sql);
?>

<div class="container">
<h2 class="container">product list</h2>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
    </tr>
    
    <?php 
    $sn = 1;
    while($row = $result->fetch_object()):?>
    <tr>
        <th><?php echo $sn; $sn++;?></th>  
        <th><?php echo $row->name?></th>
        <th><?php echo $row->address?></th>
        <th><?php echo $row->mobile?></th>
    </tr>
    <?php endwhile?>
</table>
<br>

<a class="btn btn-outline-primary" href="entry_manufacturer.php">ADD NEW</a>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>