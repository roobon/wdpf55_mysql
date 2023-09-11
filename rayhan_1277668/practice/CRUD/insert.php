<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Insert</title>
</head>
<body>
<?php 

if ( isset( $_POST['submit'] ) ){
    extract($_POST);
    include("db-config.php");

$sql = " INSERT INTO games VALUES ( NULL, '$name', '$date', '$genre' ) " ;
$db->query($sql);

if ( $db->affected_rows ){
  session_start();
  $_SESSION['insert_msg'] = " Data Inserted Successfully..." ;
    header("Location:index.php");
} else {
    echo "data insert failed..!";
}


}

?>


<div class="container mt-5">
    <h2 > Insert Games Data </h2>
<form class="w-50" method="post">

  <div class="form-outline mb-4">
    <input type="name" name="name" id="form1Example1" class="form-control" placeholder="Enter name" />
  </div>
  
  <div class="form-outline mb-4">
    <input type="date" name="date" id="form1Example1" class="form-control" placeholder="Enter Release Date" />
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="genre" id="form1Example1" class="form-control" placeholder="Enter Genre" />
  </div>

    <input class="btn btn-primary p-2" type="submit" name="submit">

</form>
</div>


</body>
</html>