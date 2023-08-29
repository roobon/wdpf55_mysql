<?php 
$db = new mysqli("localhost", "root", "", "evi2_database" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students</title>
</head>
<body>
     
<h4> students list </h4>

    <?php 
    
    if (isset($_POST['delete'])) :
        extract($_POST) ;
        $db->query("DELETE FROM student WHERE   = '$students'") ;
        if ( $db-> affected_rows ){
            echo "Deleted..." ;
        }
        endif ;
        
    ?>


    <form action="" method="post">

    <select name="students">
        <option value=""> select one  </option>
        
        <?php    
        $result = $db->query("SELECT * FROM student");
        while ( $row = $result->fetch_assoc() ):
        ?>

        <option value=" <?php echo $row['st_id'] ;?>">  <?php echo $row['name'] ; ?> </option>

        <?php  endwhile ;  ?>
    </select>

    <input type="submit" name="delete" value="DELETE">

    </form>

</body>
</html>