<?php 
    $db = new mysqli("localhost", "root", "", "singer");
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
        $id = $_POST['manufacture'];
        $db->query("DELETE FROM product WHERE m_id = '$id'");
        if($db->affected_rows>0){
            echo "Deleted<br>";
        }
    
    
    
    endif;
    ?>
   <form action="" method="post">
    Manufacture : <br><br>
    <select name="manufacture">
        <option value="checked">Select One</option>
        <?php 
         $result = $db->query("SELECT * FROM manufacturer");
         while($row = $result->fetch_assoc()) :
        
        ?>
        <option><?php  echo $row['m_id']?><?php  echo $row['name']?></option>
        <?php  endwhile;?>


    </select><br><br>
    <input type="submit" name="delete" value="Delete">
   </form>
</body>
</html>