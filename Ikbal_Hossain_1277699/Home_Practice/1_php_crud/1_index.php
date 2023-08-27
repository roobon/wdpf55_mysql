<?php // step: 2 overall
    // step: 01 In this page

    require_once("db_config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
       table{
        color: aqua;

       }

    
    </style>
</head>

<body>


       <?php  // step: 03  connection table from database to this page.

            $sql = "SELECT * FROM students_info";
            // $db = $db -> query($sql);
            // $result = $db;
            $result = $db -> query($sql);

       ?>


<!-- Step: 02  create a table and show table header as database's total header -->

    <div class="container">
        <h3> List of All Students </h3>
        <div class="container">
            <a href="entry.php" class="btn btn-outline-success" style ="font-weight:bolder"> New Student Entry </a> <br> <br>
        </div>


        <table class="table table-success table-striped">
            <tr>
                <th>Student ID </th>
                <th> Name </th>
                <th> Gender </th>
                <th> Email </th>
                <th> Phone </th>
                <th> City </th>
                <th> Address </th>
                <th> Batch </th>
                <th> Action </th>
            </tr>


            <?php  // step: 04  show the (record / row) as it is form database in a dynamic way

                while($row = $result -> fetch_object()){ ?>

                    <tr>
                        <td> <?php  echo $row ->  student_id ?> </td>
                        <td> <?php  echo $row ->  student_name ?> </td>
                        <td> <?php  echo $row ->  student_gender ?> </td>
                        <td> <?php  echo $row ->  student_email ?> </td>
                        <td> <?php  echo $row ->  student_phone ?> </td>
                        <td> <?php  echo $row ->  student_city ?> </td>
                        <td> <?php  echo $row ->  student_address ?> </td>
                        <td> <?php  echo $row ->  student_batch ?> </td>

                        <td>
                            <a href="edit.php" class = "btn btn-outline-success"> Edit </a>
                            <a href="delete.php" > Delete </a>
                        </td>
                    </tr>

                <?php   } ?>
            
        </table>

    </div>























    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>