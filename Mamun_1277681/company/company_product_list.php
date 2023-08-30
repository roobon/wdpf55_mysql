
</html>
<?php 
$db = new mysqli('localhost', 'root', '', 'mysql_evidance');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>company name</title>
</head>
<body>
    <form action="" method="post" class="container">
        <h2>Company List</h2>
     

       <?php 
        if(isset($_REQUEST['delete'])):
        $mid =   $_POST['company'];
        $db->query("DELETE FROM manufacturer WHERE manufacture_id = '$mid'");
        if($db->affected_rows>0){
            echo "DELETED";
        }
        endif;
       ?>
       <select name="company">
       <option value="">Select One</option>
       <?php 
     $result = $db->query( "SELECT * FROM manufacturer");

     while($row = $result->fetch_assoc()):
       ?>
       <option value="<?php echo $row['mid'];?>"><?php echo $row['company_name'];?> </option>
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
        <th>Product Name</th>
        <th>Price</th>
        <th>Company Name</th>
    </tr>
    
    <?php 
    $sn = 1;
    while($row = $result->fetch_object()):?>
    <tr>
        <th><?php echo $sn; $sn++;?></th>  
        <th><?php echo $row->product_name?></th>
        <th><?php echo $row->price?></th>
        <th><?php echo $row->company_name?></th>
    </tr>
    <?php endwhile?>
</table>
<br>

<a class="btn btn-outline-primary" href="entry_manufacturer.php">ADD NEW</a>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>