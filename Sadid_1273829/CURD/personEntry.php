<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Entry form</title>
</head>
<body>
    <h3 class="text-center m-3"><u>Person Entry Form</u></h3>

    <?php 
        if (isset($_REQUEST['submit'])) {
            extract($_REQUEST);
            require_once('db_config.php');

            $sql = "INSERT INTO persons VALUES(NULL, '$lastname', '$firstname', '$address', '$city', '$email', '$dob')";
            $db->query($sql);
            if ($db->affected_rows) {
                // $_SESSION['message'] = "User data submit successfully.";
                header("Location: index.php");
            }
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="container w-25 form form-control" method="post">
        <input class="form-control" type="text" name="firstname" placeholder="First Name"><br>
        <input class="form-control" type="text" name="lastname" placeholder="Last Name"><br>
        <textarea class="form-control" name="address" placeholder="Address" cols="20" rows="6"></textarea><br>
        <input class="form-control" type="text" name="city" placeholder="Enter Your City"><br>
        <!-- <select name="city" class="form-control">
            <option value="" selected>Select Your city</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Rajshahi">Rajshahi</option>
        </select><br> -->
        <input class="form-control" type="email" name="email" placeholder="Enter Your email address"><br>
        <label>Date Of Birth</label>
        <input class="form-control" type="date" name="dob"> <br>
        <input class="form-control btn btn-outline-success" type="submit" name="submit" value="Submit">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>