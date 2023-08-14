<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Entry form</title>
</head>
<body>
    <h3 class="text-center m-3"><u>Update Form</u></h3>

    <?php 
        // $id = $_REQUEST['id'];
        // $result = $db->query("SELECT * FROM persons WHERE PersonID = '$id'");
        // $row = $result->fetch_assoc();

        // if (isset($_REQUEST['submit'])) {
        //     extract($_REQUEST);
        // }

        // $sql = "UPDATE "
        // $db->query($sql);

        // if ($db->affected_rows) {
        //     echo "Updated Data";
        // }

        // <?php
        require_once("db_config.php"); 
         $id = $_REQUEST['id'];

         $result = $db->query("SELECT * FROM persons WHERE PersonID='$id'");
         $row = $result->fetch_object();
        
        if(isset($_REQUEST['submit'])){
            extract($_REQUEST);
           // $sql = "INSERT INTO persons  VALUES (NULL, '$lname', '$fname', '$address', '$city', '$email', '$dob')";
            $db->query($sql);

           if($db->affected_rows){
            echo "Inserted";
           }
        }  
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="container w-25 form form-control" method="post">
        <input class="form-control" type="text" name="firstname" placeholder="First Name" value="<?php echo $row->FirstName ?>"><br>
        <input class="form-control" type="text" name="lastname" placeholder="Last Name" value="<?php echo $row->LastName ?>"><br>
        <textarea class="form-control" name="address" placeholder="Address" cols="20" rows="6" value="<?php echo $row->Address ?>"></textarea><br>
        <input class="form-control" type="text" name="city" placeholder="Enter Your City" value="<?php echo $row->City ?>"><br>
        <input class="form-control" type="email" name="email" placeholder="Enter Your email address" value="<?php echo $row->EmailAddress ?>"><br>
        <label>Date Of Birth</label>
        <input class="form-control" type="date" name="dob" value="<?php echo $row->DOB ?>"> <br>
        <input class="form-control btn btn-outline-success" type="submit" name="submit" value="Update">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>