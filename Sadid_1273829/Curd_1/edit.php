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
    <input type="name" name="name" class="form-control" ><br>
    <input type="radio" name="gender" id=""> Male
    <input type="radio" name="gender" id=""> Female
    <input type="name" name="name" class="form-control" ><br>
    <input type="date" name="date" class="form-control" ><br>
    <input type="email" name="email" class="form-control"><br>
    Batch:
    <select name="batch">
        <option value="53">53</option>
        <option value="54">54</option>
        <option value="55">55</option>
        <option value="56">56</option>
    </select>
    <textarea name="address" class="form-control"></textarea>
    Hobbies: <select name="hobbies">
        <option value="cricket">Cricket</option>
        <option value="football">Football</option>
        <option value="hockey">Hockey</option>
    </select>
    <input type="submit" class="btn btn-success m-auto d-block w-50" name="submit" value="Add New">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>