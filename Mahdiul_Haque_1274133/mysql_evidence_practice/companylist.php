<?php 
    $db  =  new mysqli("localhost", "root", "", "evidence");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if(isset($_POST['delete'])):
    //    print_r($_POST);
        $id = $_POST['manufacture'];
        $db->query("DELETE FROM product WHERE m_id='$id'");
        if($db->affected_rows>0){
            echo "Deleted<br>";
        }

    endif;
        ?>
    <form action="" method="post">
    Manufacturer List :<br><br>
            <select name="manufacture">
            <option value="checked">Select One</option>
            <?php 
              $result = $db->query("SELECT * FROM  manufacturer");
              while($row = $result->fetch_assoc())  :
            ?>
             <option><?php echo $row['m_id']; ?><?php echo $row['company_name']; ?></option>
             <?php  endwhile;?>
             </select><br><br>
             <input type="submit" name="delete" value="DELETE">
    </form>
     <h3>Product List</h3>
    <?php 
     $sql = "SELECT * FROM product_list_view1 WHERE price>5000";
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
             <td><?php echo $row['product_name']?></td>
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