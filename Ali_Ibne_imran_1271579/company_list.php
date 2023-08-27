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
            $db->query("DELETE FROM manufacturer WHERE m_id='$mid");
            if($db->affected_rows){
                echo "DELETED";
            }

        }
      
        
    ?>
    <div class="container">
        <form action="" method="post">

            <div class="form-group mb-3 mt-3">
                <select name="company" id="" class="form-control">
                   
                    <option value="">Select One</option>
                    <?php  
                          $result = $db->query("SELECT * FROM manufacturer");while($row = $result->fetch_assoc()):
                    ?>
                    <option><?php echo $row["m_id"]?><?php echo $row["company_name"]?></option>
                    <?php endwhile?>
                </select>
            </div>
            <button type="submit" class="form-control btn btn-success" name="delete">Delete</button>
        </form>
    </div>
    
</body>
</html>