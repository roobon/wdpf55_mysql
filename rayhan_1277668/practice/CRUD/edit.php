<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
<?php 
include("db-config.php");
$id = $_REQUEST['id'] ;

$sql = " SELECT * FROM games WHERE id = '$id' " ;
 $result = $db->query($sql);
 $data = $result->fetch_assoc();


if(  isset( $_POST['update'] ) ){
    extract($_POST);
    $sql = " UPDATE games SET name='$name', year.='$date', genre='$genre' WHERE id = '$id'  " ;
}

?>

<div class="container mt-5">
    <h2 > Edit Games Data </h2>
<form class="w-50" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

<input  value=" <?php echo $data['id']  ?> " type="hidden" name="input_id" disabled >

  <div class="form-outline mb-4">
    <input type="name" name="name" id="form1Example1" class="form-control" placeholder="Enter name" value=" <?php echo $data['name']  ?> "  />
  </div>
  
  <div class="form-outline mb-4">
    <input type="date" name="date" id="form1Example1" class="form-control" placeholder="Enter Release Date"  value=" <?php echo $data['year.']  ?> "/>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="genre" id="form1Example1" class="form-control" placeholder="Enter Genre" value=" <?php echo $data['genre']  ?> "/>
  </div>

    <input class="btn btn-primary p-2" type="submit" name="update" value="UPDATE">

</form>
</div>


</body>
</html>