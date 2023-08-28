<?php 
$db = new mysqli("localhost", "root", "", "isdb_bisew"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>student List</h3>
    <?php 
    if(isset($_POST['delete'])){
        extract($_POST);
        $id = $_POST['student'];
        
        $db->query("DELETE FROM students WHERE ID = '$id'");
        if($db->affected_rows>0){
                echo "Deleted<br>";
    }
}
    
    ?>
    <form action="" method="post">
    
        <select name="student" id="">
            <option>Select one</option>
            <?php 
                $resutl = $db->query("SELECT * FROM students");
                while($row = $resutl->fetch_assoc()) :
            ?>
            <option value="<?php echo $row['ID'] ?>"><?php echo $row['Name'] ?></option>

            <?php endwhile; ?>
        </select>
        <input type="submit" name="delete" value="DELETE">
    </form>
    <br><br>

    <div class="container">
        <h3>Student Entry Form</h3>
        <a class="btn btn-success" href="entry_form.php">Student Entry Form</a>
    </div>
    
</body>
</html>

