<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>New Person Entry</title>
</head>
<body>
    <div class="container">
        <h2>Person Update Form</h2>
        <?php 
        require_once("db_config.php");
        $id = $_REQUEST['id'];

        if(isset($_POST["update"])){
            extract($_POST);
            echo "UPDATE persons SET LastName = '$lastName', FirstName = '$firstName', Address = '$address', City = '$city', Email_Address = '$email', PhoneNo = '$phone', DOB = '$dob' WHERE PersonID='$id'";

            $sql = "UPDATE persons SET LastName = '$lastName', FirstName = '$firstName', Address = '$address', City = '$city', Email_Address = '$email', PhoneNo = '$phone', DOB = '$dob' WHERE PersonID='$id'";

            $db->query($sql);

            if($db->affected_rows){
                echo "Info Successfully Updated";
            } 
        }
        
        $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'");
        $row = $result->fetch_assoc();
        ?>

        <div class="">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <div class="">
                <label class="form-label">Last Name</label>
                <div>
                    <input type="text" name="lastName" placeholder="Enter Your Last Name" class="form-control" value="<?php echo $row["LastName"]?>">
                </div>

                <span class="form-label">First Name</span>
                <div>
                    <input type="text" name="firstName" placeholder="Enter Your Last Name" class="form-control" value="<?php echo $row["FirstName"]?>">
                </div>
                </div>

                <span class="form-label">Address</span>
                <div>
                    <input type="text" name="address" placeholder="Enter Your Address" class="form-control" value="<?php echo $row["Address"]?>">
                </div>

                <span class="form-label">City</span>
                <div>
                    <select name="city" class="form-control">
                        <option value="">Select One</option>
                        <option value="Dhaka" <?php if($row["City"]=="Dhaka") echo "selected";?>>Dhaka</option>
                        <option value="Barisal" <?php if($row["City"]=="Barisal") echo "selected";?>>Barisal</option>
                        <option value="Narayanganj" <?php if($row["City"]=="Narayanganj") echo "selected";?>>Narayanganj</option>
                        <option value="Chitagonj" <?php if($row["City"]=="Chitagonj") echo "selected";?>>Chitagonj</option>
                        <option value="Rajshahi" <?php if($row["City"]=="Rajshahi") echo "selected";?>>Rajshahi</option>
                        <option value="Khulna" <?php if($row["City"]=="Khulna") echo "selected";?>>Khulna</option>
                    </select>
                </div>

                <span class="form-label">Email Address</span>
                <div>
                    <input type="text" name="email" placeholder="Enter Your Email Address" class="form-control" value="<?php echo $row["Email_Address"]?>">
                </div>

                <span class="form-label">Phone Number</span>
                <div>
                    <input type="text" name="phone" placeholder="Enter Your Phone Number" class="form-control" value="<?php echo $row["PhoneNo"]?>">
                </div>

                <span class="form-label">Date of Birth</span>
                <div>
                    <input type="date" name="dob" class="form-control" value="<?php echo $row["DOB"]?>">
                </div>

                <input type="submit" name="update" value="UPDATE" class="btn btn-primary mt-3">
                <input type="hidden" value="<?php echo $row["PersonID"]?>" name="id">
            </form>
        </div>
    </div>
</body>
</html>