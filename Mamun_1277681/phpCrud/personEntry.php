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
    if(isset($_REQUEST['submit'])){
      extract($_POST);
      require_once('db_config.php');
     $sql =  "INSERT INTO users VALUES(NUll, '$name', '$email', '$dob') ";
     $db->query($sql);
    if($db->affected_rows){
        echo "successfuly inserted";
    }
    //  header("Location:index.php");
    }
    
    ?>
    <form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post" >
        <input type="text" name="name" id="" placeholder="Enter your Name"> <br>
        <input type="email" name="email" id="" placeholder="Enter Email"> <br>
        <input type="date" name="dob" id=""> <br>
        <input type="submit" name="submit" id="" value="SUBMIT">
    </form>
</body>
</html>