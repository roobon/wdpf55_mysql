<?php 

$db = new mysqli("localhost", "root", "", "exam");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class="container">
    <h3>Manufacturer List</h3>
    </div>

    <?php 
    if(isset($_POST["delete"])):
        //print_r($_POST);
        $id = $_POST["company"];
        $db->query("DELETE FROM manufacturer WHERE id = $id"); //delete query

        if($db->affected_rows>0){
            echo "Deleted <br>";
        }

    endif;
    ?>

    <div class="container">
        <form action="" method="post">
            <select name="company" class="form-select">
                <option value="" checked>Select One</option>

                <?php 
                $result = $db->query("SELECT * FROM manufacturer");
                while($row = $result->fetch_assoc()) :
                ?>

                <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>

                <?php 
                endwhile;
                ?>
            </select>
            <input type="submit" value="DELETE" name="delete" class="btn btn-outline-primary">
        </form>
    </div>

    <div class="container">
    <h3>Product List</h3>
    </div>
    <div class="container">
        <?php 
        $sql = "SELECT * FROM product_details_view WHERE price>5000";
        $result = $db->query($sql); ?>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Manufacturer Company Name</th>
            </tr>    

        <?php
        $sn = 1;
        while($row = $result->fetch_assoc()):   ?>

        <tr>
            <td><?php echo $sn ; $sn++;?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["price"];?></td>
            <td><?php echo $row["Manufacturer"];?></td>
        </tr>

        <?php endwhile; ?>
        </table>
    </div>
    <div class="container">
    <a href="entry.php" class="btn btn-dark" target="_blank">Add New Manufacturer</a>
    </div>
</body>
</html>