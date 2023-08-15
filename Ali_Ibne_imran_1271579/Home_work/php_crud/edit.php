<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Edit</h2>
    <?php
        require_once("db_config.php");
        $id = $_GET["id"];
        $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'");
        $row = $result->fetch_assoc();
        
        if(isset($_POST["edit"])){
            extract($_POST);
            
            // echo "INSERT INTO persons VALUE (NULL, '$lname','$fname','$address','$city',$email','$dob')";
            // $sql = "UPDATE persons SET First_Name='$fname',Last_Name='$lname',Email='$email',Address='$address',DOB'$dob')";
            $db->query($sql);

            // header("Location: index.php"); //after edit then go to show in table

            if($db->affected_rows){
                echo "Submited";
            }

            
        }

        // PersonID	    LastName	FirstName	Address	City	email_address	dob
    ?>

  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <div class="mb-3 mt-3">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" name="fname" value="<?php echo $row['First_Name']?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" name="lname" value="<?php echo $row['Last_Name']?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" value="<?php echo $row['Email']?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="address">Address:</label>
      <textarea class="form-control" name="address" value="<?php echo $row['Address']?>"></textarea>
    </div>
    <div class="mb-3 mt-3">
      <label for="dob">DOB:</label>
      <input type="date" class="form-control" name="dob" value="<?php echo $row['DOB']?>">
    </div>
    <!-- <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
    <button type="submit" class="btn btn-success" name="edit">Update</button>
  </form>

</div>

</body>
</html>
