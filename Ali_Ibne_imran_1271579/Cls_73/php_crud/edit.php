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
        $id = $_REQUEST["id"];
        $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'");
        $row = $result->fetch_assoc();
        
        if(isset($_POST["update"])){
            extract($_POST);
            
            $sql = "UPDATE persons SET LastName='$lname', FirstName='$fname', Address='$address', City='$city',email_address='$email',dob='$dob' WHERE PersonID='$id'";
            $db->query($sql);

            header("Location: index.php");

            if($db->affected_rows){
                echo "Updated Successfully";
            }

            
        }

        // PersonID	    LastName	FirstName	Address	City	email_address	dob
    ?>

  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    
    <input type="hidden"  name="id" value="<?php echo $row['PersonID']?>">

    <div class="mb-3 mt-3">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" name="fname" value="<?php echo $row['FirstName']?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" name="lname" value="<?php echo $row['LastName']?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="address">Address:</label>
      <textarea class="form-control" name="address"><?php echo $row['Address']?></textarea>
    </div>
    <div class="mb-3 mt-3">
      <label for="city">City:</label>
      <select name="city">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row["City"]=="Dhaka")echo "selected";?>>Dhaka</option>
            <option value="Khulna" <?php if($row["City"]=="Khulna")echo "selected";?>>Khulna</option>
            <option value="Barisal" <?php if($row["City"]=="Barisal")echo "selected";?>>Barisal</option>
            <option value="Chattagram" <?php if($row["City"]=="Chattagram")echo "selected";?>>Chattagram</option>
        </select><br>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" value="<?php echo $row['email_address']?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="dob">Dob:</label>
      <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']?>">
    </div>
    <!-- <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
    <button type="submit" class="btn btn-success" name="update">Update</button>
  </form>

</div>

</body>
</html>
