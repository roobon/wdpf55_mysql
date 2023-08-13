<?php
require_once("db_config.php")  // step: 02

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

        <?php 
            // step: 03
            $sql = "SELECT * FROM persons";
            $result = $db -> query($sql);
        ?>

    <div class="container">
        <h2>List of all persons</h2>
        <a href="person_entry.php" class = "btn btn-success"> New Person Entry </a>

        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php  // step: 3.1
                while ($row = $result->fetch_object()) {
                ?>
                    <tr>
                        <td><?php echo $row ->PersonID ?></td>
                        <td><?php echo $row ->FirstName. " " . $row ->LastName ?></td>
                        <td><?php echo $row ->Address ?></td>
                        <td> <?php echo $row ->City ?></td>
                        <td><?php echo $row ->email_address ?></td>  
                        <td> <?php echo $row ->dob ?></td>
                        <td>
                            <a class="btn btn-success" href="edit.php?id=<?php echo $row -> PersonID ?">Edit</a> 
                            <a class="btn btn-danger" href="delete.php?id">Delete</a></td> 
                    </tr>

                <?php    } ?>
            </tbody>
        </table>
    </div>

</body>

</html>