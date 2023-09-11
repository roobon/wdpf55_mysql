<?php
$db = new mysqli("localhost","root",""," mysql_evidence ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Company List</h3>
    <?php if(isset($_POST['delete'])):

        // print_r($_post);
        $mid = $_POST['company'];
        $db->query("DELETE FROM manufacturer WHERE mid = '$mid'");
        if($db->affected_rows>0){
            echo "Deleted<br>";
        }
        endif;
    
    
    ?>
    <a href="company_product_list.php">Company and Product List</a><br><br>
    <form action="" method="post">
        <select name="company" >
            <option value="">Select One</option>
            <?php 
            $result = $db->query("SELECT * FROM manufacturer");
            while($row = $result->fetch_assoc()) :
    ?>
    <option value="<?php echo $row['mid'];?>"><?php echo $row['company_name'];?></option>
    <?php  endwhile;?>

        </select>
        <input type="submit" name="delete" value="DELETE">
    </form>

    <h3>Product List</h3>
    <?php 
        $sql = "SELECT * FROM product1_list_view_2 WHERE p_price>5000"; 
        $result = $db->query($sql); 

     ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Company Name</th>
    </tr>
    


   <?php
   $sn = 1; 
    while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $sn; $sn++; ?></td>
            <td><?php echo $row['p_name']?></td>
            <td><?php echo $row['p_price']?></td>
            <td><?php echo $row['company_name']?></td>
        </tr>
<?php
    endwhile; ?>
    </table>
    
</body>
</html>