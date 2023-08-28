<?php 
require_once('db_config.php');
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
    <div class="container">
    <h3>Company List</h3>
    <?php 
        if(isset($_POST['delete'])) :
            // print_r($_POST);
            $mid = $_POST['company'];
            $db->query("DELETE FROM manufactural WHERE mid='$mid'");
            if($db->affected_rows>0){
                echo "Deleted<br>";
            }    
        endif;
    ?>
    <form action="" method="post">
        <select name="company">
            <option value="">Select One</option>
            <?php 
                $resutl = $db->query("SELECT * FROM manufactural");
                while($row = $resutl->fetch_assoc()) :
            ?>
            <option value="<?php echo $row['mid']; ?>"><?php echo $row['company_name']; ?></option>
            <?php endwhile; ?>
        </select>
    <input type="submit" name="delete" value="DELETE">
    </form>
    </div>
    <br><br>
	
    <div class="container">
        <div><a class="btn btn-info" href="manufactural_entry.php">Manufactural Entry Form</a></div>
    <h3>Products List</h3>
    <?php 
        $sql = "SELECT * FROM manufactural_products_view";
        $result = $db->query($sql);
    ?>
       <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Company Name</th>
            </tr>
        </thead>
        <tbody>
       <?php 
       $sn = 1;
        while($row = $result->fetch_assoc()): ?>
        
            <tr>
                <td><?php echo $sn; $sn++; ?></td>
                <td><?php echo $row['p_name'] ?></td>
                <td><?php echo $row['p_price'] ?></td>
                <td><?php echo $row['company_name'] ?></td>
            </tr>
       <?php 
        endwhile;
        
       ?> 
       </tbody>            
       </table>
    </div>
    
    
</body>
</html>