<?php 
         $db = new mysqli("localhost", "root", "", "evidence");
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
        $mid = $_POST['manufacture'];
        $db->query("DELETE FROM manufacturer WHERE m_id='$mid'");
        if($db->affected_rows>0){
            echo "Deleted<br>";
        }

    endif;
    ?>
<form action="" method="post"><br>
        Manufacturer List :<br>
            <select name="manufacture">
            <option value="">Select One</option>
            <?php 
               $result = $db->query("SELECT * FROM manufacturer");
               while($row = $result->fetch_assoc()) :
            ?>
            <option><?php echo $row['m_id']; ?><?php echo $row['company_name']; ?></option>
           

            <?php endwhile;?>
        </select><br><br>
       
        <input type="submit" name="delete" value="DELETE">
    </form><br> 

    <h3>Product List</h3>
    <?php 
     $sql = "SELECT * FROM product_list_view WHERE price>5000";
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
             <td><?php echo $row['p_price']?></td>
             <td><?php echo $row['m_id']?></td>
            </tr>
     <?php 
        endwhile;
     
     ?>
     </table><br>

     <a href="entryform.manufacture.php">New Manufacturer</a>

     <input type="submit" name="update" value="UPDATE">
</body>
</html>