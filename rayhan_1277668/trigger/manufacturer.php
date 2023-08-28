<?php 

$db = new mysqli("localhost", "root", "", "idb_bisew" );

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

    <?php 
    if (isset($_POST['delete'])) :
        $m_id = $_POST['company'];
        $db->query("DELETE FROM manufacturer WHERE M_id= '$m_id'");
        if ($db->affected_rows) {
            echo "DELETED... haha.." ;
        }
        endif ;
    ?>



    <form action="" method="post">
        <select name="company">
        <option value=""> select One </option>
        <?php 
        $result = $db->query("SELECT * FROM  manufacturer") ;
        while($row = $result->fetch_assoc()) :
        ?>
        <option value=" <?php  echo $row['M_id'] ; ?>"> <?php  echo $row['Company_name'] ; ?>   </option>
            <?php  endwhile; ?>

        </select> <br>
        <input type="submit" name="delete" value="DELETE">
    </form>

    <br>
    <hr>
    <hr>
    <h3>Prouct List</h3>
    <table></table>
</body>

</html>