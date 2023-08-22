<?php 
    $db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");
    
    // update data using submission
    if (isset($_REQUEST['update'])) {
        extract($_REQUEST);
        $hobbies = implode(",", $hobby);
        $db->query("UPDATE students SET name= '$name', gender='$gender', dob='$dob', email='$email', batch='$batch', address='$address', hobbies = '$hobbies' WHERE id='$id'");

        if ($db->affected_rows) {
            header("Location: index.php");
        }
    }


// showing data
    $id = $_REQUEST['id'];
    $result = $db->query("SELECT * FROM students WHERE id='$id'");
    $row = $result->fetch_object();

    $hobbies = $row->hobbies;
    $hobbies = explode(",", $hobbies);
    $hobbyList = array("cricket", "football", "hockey", "tenis");
    $namefield = "hobby";
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
    <h1 class="text-center mt-4">Edit List</h1>
<form class="container w-25 mt-3">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">

    <input type="name" name="name" class="form-control" value="<?php echo $row->name; ?>"><br>

    <input type="radio" name="gender" value="male" <?php echo ($row->gender == 'male')? 'checked' : '' ?> > Male
    <input type="radio" name="gender" value="female" <?php echo ($row->gender == 'female')? 'checked' : '' ?> > Female<br>

    <input type="date" name="dob" class="form-control" value="<?php echo $row->dob ?>"><br>

    <input type="email" name="email" class="form-control" value="<?php echo $row->email ?>"><br>

    Batch:
    <select name="batch" value="<?php echo $row->batch; ?>">
        <option value="53" <?php echo ($row->batch=="53") ? "selected" : ""; ?>>53</option>
        <option value="54" <?php echo ($row->batch=="54") ? "selected" : ""; ?>>54</option>
        <option value="55" <?php echo ($row->batch=="55") ? "selected" : ""; ?>>55</option>
        <option value="56" <?php echo ($row->batch=="56") ? "selected" : ""; ?>>56</option>
    </select><br>

    <textarea name="address" class="form-control"><?php echo $row->address ?></textarea><br>

    Hobbies: <br>
    <?php foreach($hobbyList as $value):?>
        <input type="checkbox" name="<?php echo $namefield."[]"?>" value="<?php echo $value?>" <?php echo in_array($value, $hobbies)? "checked" : "" ?> > <?php echo $value; ?> <br>
    <?php endforeach; ?>

    <input type="submit" class="btn btn-success m-auto d-block w-50" name="update" value="Update">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>