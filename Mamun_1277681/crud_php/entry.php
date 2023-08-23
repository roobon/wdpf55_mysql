<?php 
if(isset($_REQUEST['submit'])){
    $db = new mysqli('localhost', 'root', '', 'isdb_bisew_55');
    extract($_REQUEST);
    $hobbies = implode(",", $hobby);
    
    $db->query("INSERT INTO user VALUES(NULL, '$name', '$gender', '$email',  '$dob', '$address', '$hobbies')");
    
    if($db->affected_rows){
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>New Entry</title>
</head>
<body>
    <form class="container w-25 mt-5">
        <input type="name" name="name" class="form-control" placeholder="Enter name"><br>

        Gender:
        <?php  ?>
        <input type="radio" class="" name="gender" value="Male"> Male
        <input type="radio" class="" name="gender" value="Female"> Female <br>

        <input type="email" name="email" class="form-control" placeholder="enter email"><br>

        <input type="date" name="dob" class="form-control"><br>

        <textarea name="address" class="form-control" placeholder="Enter address"></textarea> <br>

        Hobbies: <br>
        <input type="checkbox" name="hobby[]" value="cricket"> Cricket <br>
        <input type="checkbox" name="hobby[]" value="football"> Football <br>
        <input type="checkbox" name="hobby[]" value="hockey"> Hockey <br>
        <input type="checkbox" name="hobby[]" value="tenis"> Tenis <br>
        </select><br>

        <input type="submit" class="btn btn-success m-auto d-block w-50" name="submit" value="Add New">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>