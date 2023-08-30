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
    <title>Entry Form</title>
</head>

<body>
<div class="container">
    <?php
    if (isset($_POST["submit"])) {
        extract($_POST);
        //print_r($_POST);
        $sql = "CALL insert_company_info('$company', '$address', '$contact')";
        $db->query($sql);
    }
    ?>
    <h3>Manufacturer Entry Form</h3>
    <form action="" method="post">
        <label for="company_name" class="form-label">Company Name :</label>
        <input type="text" name="company" class="form-control" placeholder="Enter Manufacturer Company Name">

        <label for="address" class="form-label">Address :</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Address">

        <label for="contact" class="form-label">Contact :</label>
        <input type="text" name="contact" class="form-control" placeholder="Enter Contact Number">

        <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary mt-2">

    </form>
    <?php 
    if (isset($_POST["submit"])) {

            if($db->affected_rows>0){
                echo "<b>Manufacturer Successfully Added.</b>";
            }else{
                echo "Failed to add new Manufacturer.";
            }
        }
    ?>
</div>
</body>

</html>