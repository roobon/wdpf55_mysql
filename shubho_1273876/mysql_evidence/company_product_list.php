<?php
$db = new mysqli("localhost", "root", "", "evidence");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Company List</h3>
                <?php if (isset($_POST['delete'])) :


                    $mid = $_POST['company'];
                    $db->query("DELETE FROM  manufacturer WHERE m_id='$mid'");
                    if ($db->affected_rows > 0) {
                        echo "Deleted";
                    }
                endif;
                ?>

                <form action="" method="post">
                    <select name="company" id="" class="form-select" aria-label="Default select example">

                        <option value="">Select One</option>
                        <?php
                        $result = $db->query("SELECT * FROM manufacturer");
                        while ($row = $result->fetch_assoc()) :
                        ?>
                            <option value="<?php echo $row['m_id'] ?>"><?php echo $row['company_name'] ?></option>
                        <?php endwhile; ?>
                    </select>
                    <input type="submit" value="Delete" name="delete" class="btn btn-danger mt-2">
                </form>




                <h3>Product List</h3>
                <?php
                $sql = "SELECT * FROM product_list_view";
                $result = $db->query($sql);

                ?>
                <table class="table table-striped">
                    <tr>
                        <td>ID</td>
                        <td>Product NAme</td>
                        <td>Price</td>
                        <td>Company Name</td>
                    </tr>
                    <?php
                    $sn = 1;
                    while ($row = $result->fetch_assoc()) : ?>

                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td> <?php echo $row['product_name'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                            <td><?php echo $row['company_name'] ?></td>
                        </tr>
                    <?php
                    endwhile;
                    ?>
                </table>


                <br>
                <a href="company_entry.php" class="btn btn-success">Click here to add</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>