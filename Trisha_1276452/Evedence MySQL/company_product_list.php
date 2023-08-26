
<?php   $db =new mysqli ("localhost", "root","" ,"evedence_mysql")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Company list</h3>
    <?php 
     if(isset($_POST['delete'])):
      $mid =$_POST['company'];

      $db->query("DELETE FROM manufacture WHERE  mid='$mid'");
      if($db->affected_rows>0){
        echo "Deleted <br>";
      }
     endif;

    ?>

<form action="" method ="post">
    

        
        <select name="company">
        <option value="">Select One</option>

            <?php 
            $result = $db->query("SELECT *FROM manufacturer");
            while ($row = $result->fetch_assoc()):
            ?>
             <option value=""<?php echo $row['mid']; ?>" <?php echo $row['company name']; ?></option>

            <?phpendwhile; ?>
        </select> <br>
    <input type="submit" name="delete" placeholder="DELETE">
</form>


<h3>Product list</h3>
</body>
</html>