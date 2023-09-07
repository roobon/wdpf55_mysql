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
    <h3>Student Edit Form</h3>
    <?php 
        if(isset($_POST['update'])){
            extract($_POST);

            $sql = "UPDATE students SET Name='$name', Address='$address', Mobile='$mobile' WHERE ID ='$id')";
            $db->query($sql);
            if($db->affected_rows>0){
                header("Inserted <br>");
            }
        } 
        $result = $db->query("SELECT * FROM students WHERE ID='$id'");
        $row = $result->fetch_assoc();   
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        
        <label for="">Name</label><br>
        <input type="text" name="name" placeholder="Enter Student Name" value="<?php echo $row['Name']?>""><br>

        <label for="">Addrerss</label><br>
        <textarea name="address" placeholder="Enter Address" cols="30" rows="10"><?php echo $row['Address']?>"</textarea><br>

        <label for="">Mobile Number</label><br>
        <input type="text" name="mobile" placeholder="Enter Your Phone Number" value="<?php echo $row['Mobile']?>""><br>

        <input type="submit" name="update" value="UPDATED">

        <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
    </form>
</body>
</html>