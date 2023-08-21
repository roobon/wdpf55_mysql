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
        <h2>Person Entry Form</h2>
        <?php 
        if(isset($_POST["submit"])){
            extract($_POST);
            require_once("db_config.php");

            $sql = "INSERT INTO persons VALUE(NULL, '$lastName', '$firstName', '$address', '$city', '$email', '$phone', '$dob')";

            $db->query($sql);

            if($db->affected_rows){
                echo "Info Successfully inserted";
            }
        }
        ?>
        <div class="">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <div class="">
                <label class="form-label">Last Name</label>
                <div><input type="text" name="lastName" placeholder="Enter Your Last Name" class="form-control"></div>

                <span class="form-label">First Name</span>
                <div><input type="text" name="firstName" placeholder="Enter Your Last Name" class="form-control"></div>
                </div>

                <span class="form-label">Address</span>
                <div><input type="text" name="address" placeholder="Enter Your Address" class="form-control"></div>

                <span class="form-label">City</span>
                <div><select name="city" class="form-control">
                    <option value="">Select One</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Narayanganj">Narayanganj</option>
                    <option value="Chitagonj">Chitagonj</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                </select></div>

                <span class="form-label">Email Address</span>
                <div><input type="text" name="email" placeholder="Enter Your Email Address" class="form-control"></div>

                <span class="form-label">Phone Number</span>
                <div><input type="text" name="phone" placeholder="Enter Your Phone Number" class="form-control"></div>

                <span class="form-label">Date of Birth</span>
                <div>
                    <input type="date" name="dob" class="form-control">
                </div>

                <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary mt-3">
            </form>
        </div>
    </div>
</body>
</html>