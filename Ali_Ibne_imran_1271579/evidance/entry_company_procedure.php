<?php  $db= new mysqli("localhost","root","","evidence");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h2>Company Entry</h2>

            <?php 
            // require_once("connection.php");
                if(isset($_POST["entry"])){
                    extract($_POST);
                    

                    $sql = "CALL insert_company_info('$name','$address','$contact')";

                    
                    $db->query($sql);

                    if($db->affected_rows){
                       echo "Success";
                       header("Location: manufacture_list.php");
                    }
                }
            ?>
   
        <form action="" method="post">
            <div class="form-group mb-3 mt-3">
                <label>Comany Name :</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group mb-3 mt-3">
                <label>Address :</label>
                <textarea class="form-control" name="address"></textarea>
            </div>
            <div class="form-group mb-3 mt-3">
                <label>Contact :</label>
                <textarea class="form-control" name="contact"></textarea>
            </div>
            
            
            <button type="submit" class="btn btn-success" name="entry">Entry</button>
        </form>

    </div>
</body>
</html>