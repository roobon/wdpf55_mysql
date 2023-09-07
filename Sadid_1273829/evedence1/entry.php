<?php 
    if (isset($_REQUEST['submit'])) {
        extract($_REQUEST);

        require_once("config.php");
        $result = $db->query("INSERT INTO manufacturer(mid, name, address, contact) VALUES(NULL, '$name', '$address', '$contact')");

        if ($db->affected_rows) {
            // header("Location: index.php");
            echo "insert successfully";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <h3 class="text-center m-3">Entry Manufacturer</h3>
    <form method="post" class="container w-25">
        <input type="text" name="name" placeholder="Enter name" class="form-control"> <br>
        <input type="text" name="address" placeholder="Enter address" class="form-control"> <br>
        <input type="text" name="contact" placeholder="Enter contact" class="form-control"> <br>
        <input type="submit" name="submit" class="btn btn-success d-block m-auto w-50" value="submit">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>