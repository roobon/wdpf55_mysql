<?php
$db =  new mysqli("localhost", "root", "", "wdpf55_evidence");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <h3> Company List </h3>

  <?php // step: 03
  if (isset($_POST['delete'])) :

  // print_r($_POST);



  endif;
  ?>

  <!-- step: 01 => show form and drop down list in company_name -->
  <form action="" method="post">
      <select name="company">
        <option value=""> Select One </option>

        <?php  // step: 02 until endwhile
        $result = $db->query("SELECT * FROM 	manufacturer");
        while ($row = $result->fetch_assoc()) :
        ?>

          <!-- <option value=""><?php echo $row['company_name']; ?></option> -->

          <option value="<?php echo $row['m_id'] ?>"> <?php echo $row['company_name'] ?>

          <?php endwhile; ?>
      </select> <br>

      <input type="submit" name="delete" class="btn btn-danger" value="DELETE">
  </form>

  <h3> Product List </h3>

  <?php
    $sql = "SELECT * FROM  product_list_view";
    $db = $db->query($sql);
    $result = $db;
  ?>

  <table border="1">
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Company Name</th>
      </tr>
    
    <?php
    $sn = 1;
       while ($row = $result->fetch_assoc()) :  ?>

      <tr>
        <td> <?php echo $sn; $sn ++; ?> </td>
        <td> <?php echo $row ['product_name'] ?> </td>
        <td> <?php echo $row ['price'] ?> </td>
        <td><?php echo $row ['company_name'] ?> </td>
      </tr>

    <?php
       endwhile;
    ?>

  </table> <br>

  <a href="manufacturer_entry.php" class="btn btn-success">Manufacturer Entry </a>










  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>