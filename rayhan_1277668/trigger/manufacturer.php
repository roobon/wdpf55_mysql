<?php 

$db = new mysqli("localhost", "root", "", "idb_bisew" );

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL Trigger</title>

    <style>
        body {
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
        }
        table {
            width: 600px;
            height: 400px;
            border-radius: 10px;
        }

        .cmp{
            
            font-size: 30px;
        }

        button {
            margin-top: 50px ;
            background-color: lightsalmon;
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 20px;
        }
         .top_div{
            display: flex;
            gap: 50px;
         }
     
    </style>

</head>



<body>
    <div>

<div class="top_div">
        
<div>
    
    <h3>Company List</h3>
    
    <?php 
    if (isset($_POST['delete'])) :
        $m_id = $_POST['company'];
        $db->query("DELETE FROM manufacturer WHERE M_id= '$m_id'");
        if ($db->affected_rows) {
            echo "DELETED... haha.." ;
        }
        endif ;
    ?>
    
    
    
    <form action="" method="post">
        <select class="cmp" name="company">
        <option  class="cmp" value=""> select One </option>
        <?php 
        $result = $db->query("SELECT * FROM  manufacturer") ;
        while($row = $result->fetch_assoc()) :
        ?>
        <option value=" <?php  echo $row['M_id'] ; ?>"> <?php  echo $row['Company_name'] ; ?>   </option>
            <?php  endwhile; ?>
    
        </select> <br> <br>
        <input type="submit" name="delete" value="DELETE">
    </form>
    </div>
    
    <div>  
       <button>  <a href="entry.php"> Enter Manufacturer  </a> </button>
       </div>
    
    
</div>


<br>
<hr>
<hr>
<h3>Prouct List</h3>
<?php         
$sql = "SELECT * FROM manufacturer_info";
$result =  $db->query($sql) ; ?>
<table border="50">
    <tr>
        <td>ID</td>
        <td>Product Name</td>
        <td>Price</td>
        <td>Conpany Name</td>
    </tr>


<?php 
$sn = 1 ;
while($row = $result->fetch_assoc()) :    ?>
<tr>
   <td> <?php  echo $sn; $sn++ ; ?>  </td>
    <td> <?php echo $row['P_name']  ?> </td>
    <td> <?php echo $row['P_price']  ?></td>
    <td> <?php echo $row['Company_name']  ?></td>
</tr>
    <?php 
endwhile ;
?>

</table>
    </div>



</body>
</html>