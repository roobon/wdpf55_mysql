<?php 
include_once("db_config.php");
$sql = "SELECT * FROM students";
$result=$db->query($sql);
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
    <title>CRUD Index</title>
</head>
<body>
    <div class="container text-center"><h1>CRUD Self Practice</h1></div>
    <div class="container text-center">
    <table class="table table-bordered table-hover ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Batch</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_object()){ ?>

            <tr>
                <td><?php echo $row->id?></td>
                <td><?php echo $row->studentname?></td>
                <td><?php echo $row->gender?></td>
                <td><?php echo $row->batch?></td>
                <td><?php echo $row->phone?></td>
                <td><?php echo $row->email?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row->id?>" target="_blank" class="btn btn-outline-warning text-dark">Edit</a>
                    <a href="delete.php?id=<?php echo $row->id?>" class="btn btn-outline-danger text-dark">Delete</a>
                </td>
            </tr>

            <?php }?>
        </tbody>
    </table>
    <a href="entry.php" target="_blank" class="btn btn-outline-primary text-dark">Enter New Student Info</a>
    </div>
</body>
</html>