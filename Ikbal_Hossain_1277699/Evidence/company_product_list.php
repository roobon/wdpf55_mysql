<?php
$db =  new mysqli("localhost", "root", "", "wdpf55_evidence");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

      <input type="submit" name="delete" value="DELETE">
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

  </table>



</body>

</html>