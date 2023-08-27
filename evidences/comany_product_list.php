<?php 
    $db = new mysqli("localhost", "root", "", "wdpf55_evidences");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Company List </h3>
    <?php if(isset($_POST['delete'])):
            //print_r($_POST);
           $mid =  $_POST['company'];
           $db->query("DELETE FROM manufacturer WHERE mid='$mid'");
            if($db->affected_rows>0){
                echo "Deleted<br>";
            }
          endif;
        ?>
    
    <form action="" method="post">
        <select name="company">
            <option value="">Select One</option>
            <?php 
                $result = $db->query("SELECT * FROM manufacturer");
                while($row = $result->fetch_assoc()) :
            ?>
                <option value="<?php echo $row['mid']; ?>"><?php echo $row['company_name']; ?></option>

            <?php endwhile;?>
        </select>
        <input type="submit" name="delete" value="DELETE">
    </form>


    <h3>Product List</h3>
</body>
</html>