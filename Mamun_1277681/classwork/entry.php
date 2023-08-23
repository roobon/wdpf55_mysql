
<?php 
$db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student Entry Form</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">New Student Entry</h1>


    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $hobbies = implode(',', $hobby);
        $sql = "INSERT INTO students VALUES(NULL, '$name', '$gender', '$dob', '$email', '$batch', '$address', '$hobbies')";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Successfully inserted";
            header('Location:index.php');
        }
    }
    ?>
    <form method="post">
        <div class="form-group">
            <label for="studentID">Student ID</label>
            <input type="text" class="form-control" id="studentID" placeholder="Enter student ID">
        </div>
        <div class="form-group">
            <label for="studentName">Student Name</label>
            <input type="text" class="form-control" id="studentName" placeholder="Enter student name">
        </div>
        <div class="form-group">
            <label for="studentGender">Gender</label>
            <select class="form-control" id="studentGender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="studentBatch">Batch</label>
            <select class="form-control" id="batchSelect">
                <option value="53">Batch 53</option>
                <option value="54">Batch 54</option>
                <option value="55">Batch 55</option>
                <option value="56">Batch 56</option>
                <option value="57">Batch 57</option>
                <option value="58">Batch 58</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hobbies">Hobbies</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="cricketHobby" name="hobbies[]" value="cricket">
                <label class="form-check-label" for="cricketHobby">Cricket</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="footballHobby" name="hobbies[]" value="football">
                <label class="form-check-label" for="footballHobby">Football</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="hockeyHobby" name="hobbies[]" value="hockey">
                <label class="form-check-label" for="hockeyHobby">Hockey</label>
            </div>
        </div>
        <div class="form-group">
            <label for="studentHobbies">Hobbies</label>
            <input type="text" class="form-control" id="studentHobbies" placeholder="Enter hobbies">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<!-- Include Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
