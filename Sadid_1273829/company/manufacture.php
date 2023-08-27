<?php 
    $db = new mysqli("localhost", "root", "", "mysql_evidence");

    if (isset($_REQUEST['submit'])) :
        extract($_REQUEST);
        $db->query("INSERT INTO manufecturer VALUES(NULL, '$c_name', '$address', '$contact')");

        if ($db->affected_rows) {
            header("Location: ../company.php");
        }
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Company</title>
</head>
<body>
    <h2 class="text-center">Add Company</h2>
    <form method="post" class="container w-25">
    <!-- <input type="text" name="mid" class="form-control" placeholder="enter company name"> <br> -->
    <input type="text" name="c_name" class="form-control" placeholder="enter company name"> <br>
    <input type="text" name="address" class="form-control" placeholder="enter address"> <br>
    <input type="text" name="contact" class="form-control" placeholder="enter contact number"> <br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>