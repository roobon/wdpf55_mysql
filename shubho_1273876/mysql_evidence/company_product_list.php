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
    <h3>Company List</h3>
    <form action="" method="post">
        <select name="conpany" id="">

            <option value="">Select One</option>
            <?php
            $result = $db->query("SELECT * FROM manufacturer");
            while ($row = $result->fetch_assoc()) :
            ?>
                <option value=""><?php echo $row['company_name'] ?></option>
            <?php endwhile; ?>
        </select>
        <input type="submit" value="Delete" name="delete">
    </form>




    <h3>Product List</h3>

</body>

</html>