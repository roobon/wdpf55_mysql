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
        Manufacturer List :
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
    </form> 
</body>
</html>