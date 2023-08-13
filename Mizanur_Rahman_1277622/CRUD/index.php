<?php
include_once("db_config.php");
$sql = "SELECT * FROM persons";
$result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>CRUD</title>
</head>

<body>
    <div class="container mt-3">
        <h2>List of All Persons</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>PersonID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Email_Address</th>
                    <th>PhoneNo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            while($row = $result->fetch_object()){ ?>
                <tr>
                    <td><?php echo $row->PersonID ?></td>
                    <td><?php echo $row->FirstName . " " . $row->LastName?></td>
                    <td><?php echo $row->Address ?></td>
                    <td><?php echo $row->City ?></td>
                    <td><?php echo $row->Email_Address ?></td>
                    <td><?php echo $row->PhoneNo ?></td>

                </tr>
            <?php 
            }
            ?>

            </tbody>
        </table>
    </div>
</body>
</html>