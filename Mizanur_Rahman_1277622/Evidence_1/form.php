<?php 
//require_once("db_config.php");

$db = new mysqli("localhost", "root", "", "evidence_1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h3>Manufacturar List</h3>

    <?php 
    if(isset($_POST["delete"])):
        //print_r($_POST);
        $id = $_POST["company"];
        $db->query("DELETE FROM manufacturar WHERE mid = $id");

        if($db->affected_rows>0){
            echo "Deleted <br>";
        }

    endif;
    ?>

    <form action="" method="post">
        <select name="company" id="">
            <option value="" checked>Select One</option>

            <?php 
            $result = $db->query("SELECT * FROM manufacturar");
            while($row = $result->fetch_assoc()) :
            ?>

            <option value="<?php echo $row['mid'];?>"><?php echo $row['company_name'];?></option>

            <?php 
            endwhile;
            ?>
        </select>
        <input type="submit" value="DELETE" name="delete" >
    </form>

    <h3>Product List</h3>
</body>
</html>