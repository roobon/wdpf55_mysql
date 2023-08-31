<?php 
$db = new mysqli("localhost", "root", "", "isdb_bisew"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    
        <h3>Student Entry Form</h3>
        <div class="d-flex flex-row">
        <div>
                <?php 
                    session_start();
                    if (!isset($_SESSION['email'])) {
                        header("Location:index.php");
                    }
                ?>
                    <h1>Welcome to the Home page, <?php echo $_SESSION['name'] ?></h1>
                    <a class="btn btn-warning" href="logout.php">Logout</a>
            </div>
            
            <div>
                <a class="btn btn-success" href="entry_form.php">Student Entry Form</a>
            </div><br><br>
            <div>
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
                    <input class="btn btn-danger" type="submit" name="delete" value="DELETE">
                </form>
    </div>
            <div>
                <?php 
                    $sql ="SELECT * FROM  students";
                    $result = $db->query($sql);
            
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile no</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sn = 1;
                        while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <th><?php echo $sn; $sn++; ?></th>
                            <th><?php echo $row['Name']; ?></th>
                            <th><?php echo $row['Address']; ?></th>
                            <th><?php echo $row['Mobile']; ?></th>
                            <th><a class="btn btn-info" href="edit.php?id=<?php ?>"><span class="glyphicon glyphicon-edit"> Edit</span></a></th>
                        </tr>
                        <?php 
                            endwhile;
                        ?>
                    </tbody>
                </table>
        
            </div>
            
            
        </div><br><br>
        <h3>Students_Result_Views</h3>
        <?php 
            $sql ="SELECT * FROM  students_result_view ";
            $result = $db->query($sql);
        
        ?>
        <table class="table table-striped">
                <thead>
                <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Module name</th>
                        <th>Total Mark</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $sn = 1;
                    while($row = $result->fetch_assoc()): ?>
                    
                        <tr>
                            <td><?php echo $sn; $sn++; ?></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Address'] ?></td>
                            <td><?php echo $row['Mobile'] ?></td>
                            <td><?php echo $row['Module_name'] ?></td>
                            <td><?php echo $row['Total_mark'] ?></td>
                        </tr>
                <?php 
                    endwhile;
                    
                ?> 
                </tbody>
        </table>
    </div>
    
    
</body>
</html>

