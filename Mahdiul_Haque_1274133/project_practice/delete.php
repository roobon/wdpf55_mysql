<?php 
   $db = new mysqli("localhost", "root", "", "factory_detalis");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      if(isset($_POST['delete'])):
        $id = $_POST['company'];
        $db->query("DELETE FROM company_list WHERE company_id = '$id'");
        if($db->affected_rows>0){
            echo "Deleted<br>";
        }
    
    
    
    endif;
    ?>
<form action="" method="post">
    Manufacture : <br><br>
    <select name="company">
        <option value="checked">Select One</option>
        <?php 
         $result = $db->query("SELECT * FROM company_list");
         while($row = $result->fetch_assoc()) :
        
        ?>
        <option><?php  echo $row['company_id']?><?php  echo $row['company_name']?></option>
        <?php  endwhile;?>


    </select><br><br>
    <input type="submit" name="delete" value="Delete">
   </form>
   <h3>Company List</h3>
    <?php 
     $sql = "SELECT * FROM company_list1";
     $db->query($sql);
     $result = $db->query($sql); ?>
      <table border="11">
         <tr>
          <th>Company ID</th>
          <th>Company Name</th>
          <th>Company Address</th>
          <th>Company Email</th>
          <th>Company Phone</th>
        </tr>
     
     <?php 
          $sn = 1;
          while($row = $result->fetch_assoc()): ?>
          <tr>
             <td><?php echo $sn; $sn++;?></td>
             <td><?php echo $row['company_name']?></td>
             <td><?php echo $row['company_address']?></td>
             <td><?php echo $row['company_email']?></td>
             <td><?php echo $row['company_phone']?></td>
            </tr>
     <?php 
        endwhile;
     
     ?>
     </table>
</body>
</html>