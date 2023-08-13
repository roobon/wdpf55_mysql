<!DOCTYPE html>
<html lang="en">
<head>
  <title>Person Entry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Person Entry Form</h2>
    <?php 
        if(isset($_POST["entry"])){
            extract($_POST);
            require_once("db_config.php");
            // echo "INSERT INTO persons VALUE (NULL, '$lname','$fname','$address','$city',$email','$dob')";
            $sql = "INSERT INTO persons VALUE (NULL, '$lname','$fname','$address','$city','$email','$dob')";
            $db->query($sql);

            if($db->affected_rows){
                echo "Submited";
            }

            
        }

        // PersonID	    LastName	FirstName	Address	City	email_address	dob
    ?>

  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <div class="mb-3 mt-3">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" name="fname">
    </div>
    <div class="mb-3 mt-3">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" name="lname">
    </div>
    <div class="mb-3 mt-3">
      <label for="address">Address:</label>
      <textarea class="form-control" name="address"></textarea>
    </div>
    <div class="mb-3 mt-3">
      <label for="city">City:</label>
      <input type="text" class="form-control" name="city">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="dob">Dob:</label>
      <input type="date" class="form-control" name="dob">
    </div>
    <!-- <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
    <button type="submit" class="btn btn-success" name="entry">Entry</button>
  </form>

</div>

</body>
</html>
