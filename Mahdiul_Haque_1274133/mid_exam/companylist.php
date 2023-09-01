<?php 
    $db  =  new mysqli("localhost", "root", "", "factory");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


     <h3>Product List</h3>
    <?php 
     $sql = "SELECT * FROM product_line_view WHERE price>5000";
     $db->query($sql);
     $result = $db->query($sql); ?>
      <table border="11">
         <tr>
          <th>P_ID</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>M_ID</th>
        </tr>
     
     <?php 
          $sn = 1;
          while($row = $result->fetch_assoc()): ?>
          <tr>
             <td><?php echo $sn; $sn++;?></td>
             <td><?php echo $row['p_name']?></td>
             <td><?php echo $row['price']?></td>
             <td><?php echo $row['m_id']?></td>
            </tr>
     <?php 
        endwhile;
     
     ?>
     </table><br>
    <a href="entryformmanufacture.php">New Manufacturer</a>

    
</body>
</html>