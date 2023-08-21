<?php 
    $db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Student Display with Table -->
    <?php 
        $sql = "SELECT * FROM students";
        $result = $db->query($sql);

    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Dob</th>
            <th>Email</th>
            <th>Batch</th>
            <th>Address</th>
            <th>Hobbies</th>
            <th>Action</th>
        </tr>
    

    <?php 
         while ($row = $result->fetch_object()) {
            ?>
            <tr>
                <td> <?php echo $row->id ?> </td>
                <td> <?php echo $row->name ?> </td>
                <td> <?php echo $row->gender ?> </td>
                <td> <?php echo $row->dob ?> </td>
                <td> <?php echo $row->email ?> </td>
                <td> <?php echo $row->batch ?> </td>
                <td> <?php echo $row->address ?> </td>
                <td> <?php echo $row->batch ?> </td>
                <!-- <td> <button>edit</button> <button> delete </button> </td> -->
                <td> 
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>

            </tr>
      <?php } ?>
      </table>

      <!-- Student Display with Table End -->

      <!-- Delete data start -->
    <?php 
        if(isset($_GET['delete'])){
            if($_GET['action'] == 'delete'){

           
           $id =  $_GET['id'];

           $db -> query("DELETE FROM students WHERE id = '$id'");

           if($db -> affected_rows){
            echo "Deleted";
           }
        }
        }
        // jokhon show ba display korbo tokhon fetch korte hobe
    ?>



      <!-- Delete data end -->
</body>
</html>