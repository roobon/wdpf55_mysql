<?php 
    $db = new mysqli("localhost", "root", "", "mysql_evidence");
    if(isset($_REQUEST['delete'])):
        $mid = $_REQUEST['company'];
        $db->query("DELETE FROM manufecturer WHERE mid = '$mid'");

        if ($db->affected_rows) {
            echo "deleted . <br>";
        }
    endif;

    $result = $db->query("SELECT * FROM manufecturer");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Name</title>
</head>
<body>
    <h2>Company name</h2>
    <form action="" method="post">
        <select name="company">

            <?php while($row = $result->fetch_object()): ?>
            <option value="<?php echo $row->mid ?>"><?php echo $row->companyName ?></option>
            <?php endwhile; ?>
            <input type="submit" name="delete" value="Delete">
        </select>
    </form>
    <?php require_once("view.php") ?>

    <button><a href="manufacture_entry.php">Add Manufacturer</a></button>
</body>
</html>