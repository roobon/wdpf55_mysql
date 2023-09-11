<?php  $db= new mysqli("localhost","root","","idb_bisew");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <?php 
       
        if(isset($_POST["delete"])){
            $mid = $_POST["students"];
            $db->query("DELETE FROM student WHERE id='$mid'");
            if($db->affected_rows){
                echo "DELETED";
            }

        }
      
        
    ?>
    <div class="container">
        <h1>Student</h1>
        <form action="" method="post">

            <div class="form-group mb-3 mt-3">
                <select name="students" class="form-control">
                   
                    <option value="">Select One</option>
                    <?php  
                          $result = $db->query("SELECT * FROM student");
                          while($row = $result->fetch_assoc()):
                    ?>
                    <option><?php echo $row["id"]." "?><?php echo $row["name"]?></option>
                    <?php endwhile?>
                </select>
            </div>
            <button type="submit" class="form-control btn btn-success" name="delete">Delete</button>
        </form>
        <br>


        <a href="result.php" class="btn btn-success">New Entry</a> 

        <br>

        <h1>Product List</h1>
        <?php 
            $sql = "SELECT * FROM studentrecords";
            $result = $db->query($sql);
        ?>
            

    
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                       
                    </tr>
                </thead>
                <tbody>
    
                   <?php  
                        $no = 1;
                        while($row = $result->fetch_assoc()):
                    ?>
    
                    <tr>
                        <td><?php echo $no?></td>
                        <td><?php echo $row["student_name"] ?></td>
                        <td><?php echo $row["student_address"]?></td>
                        <td><?php echo $row["student_phone"] ?></td>
                          
                    </td>
                    </tr>
                    <?php 
                        $no++;
                        endwhile;
                    ?>
                
    
                </tbody>
            </table>
    </div>
    
</body>
</html>