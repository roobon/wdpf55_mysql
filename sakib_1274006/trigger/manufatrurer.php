

<?php 
//database connection
$host = "localhost";
$user = "root";
$pass = "";
$database = "idb";


$db = new mysqli($host, $user, $pass, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Company List</h1>

    <?php 
    if(isset($_POST['delete'])):
        // print_r($_POST);
        $mid= $_POST['cname'];
        $db->query("DELETE FROM manufacturer WHERE MID='$mid'");
        if($db->affected_rows>0){
            echo "DELETED<br>";
        }

    endif;
    
    ?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Company Name: <br>
    <select name="cname" id="">
        <option value="">Select One</option>
        <?php 
        
        $result = $db->query("SELECT * FROM 	manufacturer");
        while($row = $result->fetch_assoc()):
        
        ?>
        <option><?php echo $row['MID'];?><?php echo $row['Company_Name']?></option>
        <?php endwhile;?>

    </select>
        <input type="submit" name="delete" value="DELETE">
    </form>
</body>
</html>