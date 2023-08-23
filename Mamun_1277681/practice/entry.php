
<?php 
$db = new mysqli('localhost', 'root', '', 'mysql_55');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Form</title>
    <!-- Add Bootstrap 5 CSS link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-oX6H5zF5q03t7jz5Bj7I4I0wJz9I5j6E5afwPz2hN8CAERihoz5F5Pv5H+7dtr6F5" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Sample Form</h2>
        <?php 
    
    if(isset($_REQUEST['submit'])){
        extract($_POST);
        $sql = "INSERT INTO persons VALUES(NULL,'$gender', '$name', '$phone', '$email', '$Address', '$dob')";
       $result= $db->query($sql);
        if($db->affected_rows){
            echo "Successfully inserted";
        }
    }
    ?>
        <form method="post">
            <!-- ID Field -->
            <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text" class="form-control" id="id" placeholder="Enter ID">
            </div>

            <!-- Gender Field -->
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select class="form-select" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>

            <!-- Phone Field -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="tel" class="form-control" name="phone" placeholder="Enter Phone">
            </div>

            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>

            <!-- Address Field -->
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" class="form-control" name="Address" placeholder="Enter Address">
            </div>

            <!-- DOB Field -->
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" name="dob">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap 5 JS and Popper.js scripts here (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-Lhs5Gztd5P6I5zUp5n5Zw3k2A0e4fwnf5Q4b6wo5E5+U/7ze5i0Fz5F5Pv5H+7dtr6F5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-vCpE/K9bZxU5VwP3yt3Pp3klcE3ut5HfM5PcLY5Bb5Fz5F5Pv5H+7dtr6F5" crossorigin="anonymous"></script>
</body>
</html>
