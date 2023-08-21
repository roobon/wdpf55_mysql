
<?php 
require_once ("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php 
   $sql =" SELECT * FROM students ";
   $result = $db->query($sql);

?>
<div class=" table table-info container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id </th>
      <th scope="col">name </th>
      <th scope="col">gender </th>
      <th scope="col">dob </th>
      <th scope="col">email </th>
      <th scope="col">batch </th>
      <th scope="col">address </th>
      <th scope="col">hobbies </th>
      <th scope="col"> action </th>
    </tr>
  </thead>
  <tbody>
    <?php While ($row= $result->fetch_object()){
    ?>
    <tr>
      <td><?php echo $row->id?></td>
      <td><?php echo $row->name ?></td>
      <td><?php echo $row->gender?></td>
      <td><?php echo $row->dob ?></td>

      <td><?php echo $row->email ?></td>
      <td><?php echo $row->batch ?></td>
      <td><?php echo $row->address ?></td>
      <td><?php echo $row->hobbies ?></td>
      <td>
        <a href="index.php?id=<?php echo $row->id?>&action= edit">Edit</a> 
        <a href="index.php?id=<?php echo $row->id?>&action=delete">DELETE</a>
      </td>
    </tr>
    <?php }?>

    <?php 
    if (isset($_GET['action'])){
        if($_GET['action']=='delete')
        $id = $_GET['id'];

        $db->query("DELETE FROM students WHERE id='id'");

        if($db->affected_rows){
            echo " Deleted";
            echo ' <a herf ="index.php">Show List</a> '
        }
    }
    ?>
  </tbody>
</table>
</body>
</div>

</html>