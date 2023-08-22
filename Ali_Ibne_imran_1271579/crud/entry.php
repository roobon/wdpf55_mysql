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
        <h2>Student Entry</h2>

            <?php 
            require_once("connection.php");
                if(isset($_POST["entry"])){
                    extract($_POST);
                    $hobbies = implode(",", $hobby);
                    
                    $sql = "INSERT INTO students VALUE(NULL,'$name','$gender','$batch','$address','$hobbies','$dob','$email')";
                    $db->query($sql);

                    if($db->affected_rows){
                       echo "Success";
                    }
                }
            ?>
   
        <form action="" method="post">
            <div class="form-group mb-3 mt-3">
            <label>Name :</label>
            <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group mb-3 mt-3">
            <label>Gender :</label><br>
            <input type="radio" name="gender"> Male
            <input type="radio" name="gender"> Female
            </div>
            <div class="form-group mb-3 mt-3">
            <label>DOB :</label>
            <input type="date" class="form-control" name="dob">
            </div>
            <div class="form-group mb-3 mt-3">
            <label>Email :</label>
            <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group mb-3 mt-3">
            <label>Address :</label>
            <textarea class="form-control" name="address"></textarea>
            </div>
            <div class="form-group mb-3 mt-3">
            <label>Batch :</label>
            <select name="batch">
                    <option value="">Select one</option>
                    <option value="Round 56">Round 56</option>
                    <option value="Round 55">Round 55</option>
                    <option value="Round 54">Round 54</option>
                </select><br>
            </div>
            
            <div class="form-group mb-3 mt-3">
            <label>Hobbies :</label><br>
            <input type="checkbox" name="hobby[]" value="Cricket"> Cricket
            <input type="checkbox" name="hobby[]" value="Football"> Football
            <input type="checkbox" name="hobby[]" value="Batminton"> Batminton
            </div>
            
            <button type="submit" class="btn btn-success" name="entry">Entry</button>
        </form>

    </div>
</body>
</html>