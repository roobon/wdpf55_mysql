<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Person Entry Form</h3>
    <?php 
    require_once('db_config.php');
    $id =$_GET['id'];
   $result = $db->query("SELECT * FROM users WHERE ID='$id'");
   $row = $result->fetch_assoc();
    ?>

    <?php 
    if(isset($_REQUEST['submit'])){
      extract($_POST);
      
    //  $sql =  "INSERT INTO users VALUES(NUll, '$name', '$email', '$dob') ";
     $db->query($sql);
    if($db->affected_rows){
        echo "successfuly inserted";
    }
    //  header("Location:index.php");
    }
    
    ?>
    <form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post" >
        <input type="text" name="name" id="" placeholder="Enter your Name" value=" <?php echo $row['Name'] ?>"> <br>
        <input type="email" name="email" id="" placeholder="Enter Email" value=" <?php echo $row['Email'] ?>"> <br>
        <input type="date" name="dob" id="" value=" <?php echo $row['dob'] ?>"> <br>
        <input type="submit" name="submit" id="" value="UPDATE">
    </form>
</body>
</html>