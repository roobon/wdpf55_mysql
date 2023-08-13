<?php
require_once("db_config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php
        $sql= "SELECT * FROM persons";
        $result = $db->query($sql);
    ?>
    <h1>List Of All Persons</h1>

    <a href="personEntry.php" class="btn btn-outline-success d-block m-auto w-25">Add New</a>

    <table class="table container mt-5 w-75">
        <thead>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Email</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

        <?php
            while($row = $result->fetch_object()){

        ?>
            <tr class="text-center">
                <th><?php echo $row->PersonID ?></th>
                <td><?php echo $row->FirstName ?></td>
                <td><?php echo $row->LastName ?></td>
                <td><?php echo $row->Address ?></td>
                <td><?php echo $row->City ?></td>
                <td><?php echo $row->EmailAddress ?></td>
                <td><?php echo $row->DOB ?></td>
                <td><a class="btn btn-success" href="">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row->PersonID ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
                </td>
            </tr>

            <?php } ?>
            
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>