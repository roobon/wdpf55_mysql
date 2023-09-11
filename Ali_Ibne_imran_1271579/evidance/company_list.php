<?php  $db= new mysqli("localhost","root","","evidance");?>
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
            $mid = $_POST["company"];
            $db->query("DELETE FROM manufacturer WHERE m_id='$mid'");
            if($db->affected_rows){
                echo "DELETED";
            }

        }
      
        
    ?>
    <div class="container">
        <h1>Manufacture</h1>
        <form action="" method="post">

            <div class="form-group mb-3 mt-3">
                <select name="company" id="" class="form-control">
                   
                    <option value="">Select One</option>
                    <?php  
                          $result = $db->query("SELECT * FROM manufacturer");
                          while($row = $result->fetch_assoc()):
                    ?>
                    <option><?php echo $row["m_id"]." "?><?php echo $row["company_name"]?></option>
                    <?php endwhile?>
                </select>
            </div>
            <button type="submit" class="form-control btn btn-success" name="delete">Delete</button>
        </form>



                            <br>
                            <br>




        <h1>Product List</h1>
        <?php 
            $sql = "SELECT * FROM product_list WHERE price>5000";
            $result = $db->query($sql);
        ?>
            

    
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Company Name</th>
                       
                    </tr>
                </thead>
                <tbody>
    
                   <?php  
                        $no = 1;
                        while($row = $result->fetch_assoc()):
                    ?>
    
                    <tr>
                        <td><?php echo $no?></td>
                        <td><?php echo $row["product_name"] ?></td>
                        <td><?php echo $row["price"]?></td>
                        <td><?php echo $row["company_name"] ?></td>
                          
                    </td>
                    </tr>
                    <?php 
                        $no++;
                        endwhile;
                    ?>
                
    
                </tbody>
            </table>
           <br>
           <a href="entry_company_procedure.php" class="btn btn-success">New Entry</a>
                        <br>
                        <br>
                        <br>
    </div>
    
</body>
</html>