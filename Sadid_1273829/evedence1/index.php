<?php 
    require_once("config.php");
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['manufacturer'];
        // echo "DELETE FROM manufacturer WHERE mid = '$id'";
        $db->query("DELETE FROM manufacturer WHERE mid=$id");
        if ($db->affected_rows) {
            echo "Deleted";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <a class="btn btn-primary" href="entry.php">Entry Manufacturer</a> <br> <br>
    <h3>select manufacturer</h3>
    <form class="m-4" method="post">
        <select class="form-select w-50" name="manufacturer">
            <option selected>Open this select menu</option>
            <?php
            $result = $db->query("SELECT * FROM manufacturer");
            while($row = $result->fetch_object()):?>
            <option value="<?php echo $row->mid ?>"><?php echo $row->name ?></option>
            <?php endwhile; ?>
        </select> <br>
        <input type="submit" name="delete" value="DELETE">
    </form> <br><br>


    <?php 
        $result = $db->query("SELECT * FROM table_view WHERE price > 5000");
    ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL NO</th>
      <th scope="col">Product Name</th>
      <th scope="col">Company Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <?php $sn=1; while($row = $result->fetch_object()): ?>
    <tr>
      <th scope="row"><?php echo $sn; $sn++?></th>
      <td><?php echo $row->product_name ?></td>
      <td><?php echo $row->company_name ?></td>
      <td><?php echo $row->price ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>