<?php 
    // $db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");

    require_once("db_config.php");
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
                    <a href="edit.php ? id = <?php echo $row -> id; ?>">Edit</a>
                    <a href="delete.php ? id = <?php echo $row -> id; ?>" onclick="return confirm('Are you sure to delete')"> Delete </a>
                </td>

            </tr>
      <?php } ?>
      </table>
</body>
</html>