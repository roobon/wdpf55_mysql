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

        if (isset($_POST["update"])) {
            extract($_POST);
            echo "UPDATE persons2 SET  FirstName = '$firstName', LastName = '$lastName', Gender = '$gender', Address = '$address', City = '$city', Email_Address = '$email', PhoneNo = '$phone', DOB = '$dob' WHERE PersonID='$id'";

            $sql = "UPDATE persons2 SET FirstName = '$firstName', LastName = '$lastName', Gender = '$gender', Address = '$address', City = '$city', Email_Address = '$email', PhoneNo = '$phone', DOB = '$dob' WHERE PersonID='$id'";

            $db->query($sql);

            if ($db->affected_rows) {
                echo "Info Successfully Updated";
            }
        }

        $result = $db->query("SELECT * FROM persons2 WHERE PersonID='$id'");
        $row = $result->fetch_assoc();
        ?>

        <div class="">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="">
                    <label class="form-label">First Name</label>
                    <div>
                        <input type="text" name="firstName" placeholder="Enter Your Last Name" class="form-control"
                            value="<?php echo $row["FirstName"] ?>">
                    </div>

                    <label class="form-label">Last Name</label>
                    <div>
                        <input type="text" name="lastName" placeholder="Enter Your Last Name" class="form-control"
                            value="<?php echo $row["LastName"] ?>">
                    </div>
                </div>

                <div class="d-flex mt-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="form-check me-3 ms-3">
                        <input class="form-check-input" type="radio" name="gender" value="Male" <?php echo ($row["Gender"]== "Male")? "checked" : ""; ?>>
                        <label class="form-check-label">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Female" <?php echo ($row["Gender"]== "Female")? "checked" : ""; ?>>
                        <label class="form-check-label">
                            Female
                        </label>
                    </div>
                </div>

                <label class="form-label">Address</label>
                <div>
                    <input type="text" name="address" placeholder="Enter Your Address" class="form-control"
                        value="<?php echo $row["Address"] ?>">
                </div>

                <label class="form-label">City</label>
                <div>
                    <select name="city" class="form-control">
                        <option value="">Select One</option>
                        <option value="Dhaka" <?php if ($row["City"] == "Dhaka")
                            echo "selected"; ?>>Dhaka</option>
                        <option value="Barisal" <?php if ($row["City"] == "Barisal")
                            echo "selected"; ?>>Barisal</option>
                        <option value="Narayanganj" <?php if ($row["City"] == "Narayanganj")
                            echo "selected"; ?>>Narayanganj
                        </option>
                        <option value="Chitagonj" <?php if ($row["City"] == "Chitagonj")
                            echo "selected"; ?>>Chitagonj
                        </option>
                        <option value="Rajshahi" <?php if ($row["City"] == "Rajshahi")
                            echo "selected"; ?>>Rajshahi</option>
                        <option value="Khulna" <?php if ($row["City"] == "Khulna")
                            echo "selected"; ?>>Khulna</option>
                    </select>
                </div>

                <label class="form-label">Email Address</label>
                <div>
                    <input type="text" name="email" placeholder="Enter Your Email Address" class="form-control"
                        value="<?php echo $row["Email_Address"] ?>">
                </div>

                <label class="form-label">Phone Number</label>
                <div>
                    <input type="text" name="phone" placeholder="Enter Your Phone Number" class="form-control"
                        value="<?php echo $row["PhoneNo"] ?>">
                </div>

                <label class="form-label">Date of Birth</label>
                <div>
                    <input type="date" name="dob" class="form-control" value="<?php echo $row["DOB"] ?>">
                </div>

                <input type="submit" name="update" value="UPDATE" class="btn btn-primary mt-3">
                <input type="hidden" value="<?php echo $row["PersonID"] ?>" name="id">
            </form>
        </div>
    </div>
</body>

</html>