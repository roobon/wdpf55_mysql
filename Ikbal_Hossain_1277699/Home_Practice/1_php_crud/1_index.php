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
    
    
</head>

<body>


       <?php  // step: 03  connection table from database to this page.

            $sql = "SELECT * FROM students_info";
            // $db = $db -> query($sql);
            // $result = $db;
            $result = $db->query($sql);

       ?>


<!-- Step: 02  create a table and show table header as database's total header -->

       <div class="container">
            <div class="row">
                <div class="col-12">
                <h3> List of All Students </h3>
      
      <a href="entry.php" class="btn btn-outline-success" style ="font-weight:bolder"> New Student Entry </a> <br> <br>
  


         <table class="table table-dark table-striped">
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

                     while($row = $result->fetch_object()){ ?>
              <tr>
                  <td> <?php echo $row->student_id ?> </td>
                  <td> <?php echo $row->student_name ?> </td>
                  <td> <?php echo $row->student_gender ?> </td>
                  <td> <?php echo $row->student_email ?> </td>
                  <td> <?php echo $row->student_phone ?> </td>
                  <td> <?php echo $row->student_city ?> </td>
                  <td> <?php echo $row->student_address ?> </td>
                  <td> <?php echo $row->student_batch ?> </td>

                  <!-- for action effect in field or for dynamic you have to use php syntax (?id = <?php // echo $row -> student_id ?>) and for alert you need to use javascript syntax(onclick="return confirm('Are you sure to delete')" ) -->

                  <td>
                      <a href="edit.php?id=<?php echo $row->student_id ?>"  class = "btn btn-outline-success" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"> <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/> <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></a>


                      <a href="delete.php?id=<?php echo $row->student_id ?>"  onclick="return confirm('Are you sure to delete')" class = "btn btn-outline-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/> <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>

                      </svg> </a>

                  </td>
              </tr>

          <?php   } ?>
      
  </table>


                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

                </div>
            </div>
        </div>

    </body>

</html>
            
    
       