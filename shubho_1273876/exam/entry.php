<?php 
    $db = new mysqli("localhost", "root", "", "evidence_1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <title>Entry Form</title>
</head>

<body>
<div class="container">
    <?php
    if (isset($_POST["submit"])) {
        extract($_POST);
        $sql = "CALL insert_company_info('$company', '$address', '$contact')";
        $db->query($sql);
    }
    ?>
    <h3 class="pt-3 pb-3 text-center">Manufacturar Entry Form</h3>
    <form action="" method="post">
        <label for="company_name" class="form-label">Company Name :</label>
        <input type="text" name="company" class="form-control" placeholder="Enter Manufacturar Company Name">

        <label for="address" class="form-label">Address :</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Company Address">

        <label for="contact" class="form-label">Contact :</label>
        <input type="text" name="contact" class="form-control" placeholder="Enter Phone Number">

        <input type="submit" value="SUBMIT" name="submit" class="btn btn-success mt-2">

    </form>
    <?php 
    if (isset($_POST["submit"])) {

            if($db->affected_rows>0){
                echo "<b></b>Manufacturar Successfully Added.</b>";
            }else{
                echo "Failed to add new Manufacturar.";
            }
        }
    ?>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>