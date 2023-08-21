<?php
$db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");
$sql = "SELECT * FROM students";
$result = $db->query($sql);
?>

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
    <title>CRUD 1</title>
</head>

<body>
    <div class="container mt-3">
        <h2 class="">List of Students</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>DOB</th>
                    <th>EMAIL</th>
                    <th>BATCH</th>
                    <th>ADDRESS</th>
                    <th>HOBBIES</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_object()) { ?>
                    <tr>
                        <td>
                            <?php echo $row->id ?>
                        </td>
                        <td>
                            <?php echo $row->name ?>
                        </td>
                        <td>
                            <?php echo $row->gender ?>
                        </td>
                        <td>
                            <?php echo $row->dob ?>
                        </td>
                        <td>
                            <?php echo $row->email ?>
                        </td>
                        <td>
                            <?php echo $row->batch ?>
                        </td>
                        <td>
                            <?php echo $row->address ?>
                        </td>
                        <td>
                            <?php echo $row->hobbies ?>
                        </td>
                        <td>
                        <a href="edit.php?id=<?php echo $row->id ?> &action=edit">Edit</a>
                        <a href="delete.php?id=<?php echo $row->id ?> &action=delete">Delete</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </div>

    <!-- Delete data start -->
    <?php 
    if(isset($_GET["action"])){
        if($_GET["action"]=='delete'){
            $id = $_GET["id"];

            $db->query("DELETE FROM students WHERE id=$id");
    
            if($db->affected_rows){
                echo "Deleted";
            }
        }
    }
    ?>

    <!-- Delete data end -->

    <!-- Form start for input students -->
    <!-- <div class="container">
        <div><h2>CRUD FORM</h2></div>
        <form action="" method="post">
            <div>
                <label for="id" class="form-label">id</label>
                <input type="text" class="form-control" disabled>
            </div>

            <div>
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control">
            </div>


            <div class="d-flex">
            <label for="gender"  class="me-2">gender </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="">
                <label class="form-check-label" for="">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="">
                <label class="form-check-label" for="">
                    Female
                </label>
            </div>
            </div>

            <div>
                <label for="dob" class="form-label">dob</label>
                <input type="date" name="dob" class="form-control" id="">
            </div>


            <div>
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>

            <div class="form-check">
                <label for="batch">batch</label>
                <select name="batch" id="">
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                </select>
            </div>

            <div>
                <label for="address" class="form-label">address</label>
                <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>


            <div>
                <label for="hobbies" class="form-label">hobbies</label>
                <input type="checkbox" name="hobbies" id="">Cricket
                <input type="checkbox" name="hobbies" id="">Football
                <input type="checkbox" name="hobbies" id="">Badminton
            </div>

            <input type="submit" value="submit" name="submit">
        </form>
    </div> -->
    <!-- Form end for input students -->
</body>

</html>