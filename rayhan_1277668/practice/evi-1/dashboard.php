<?php

$db =  new mysqli("localhost", "root", "", "auth_users");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: lightcyan;
        }



        .div_1 {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .div_2 {
            display: flex;
            justify-content: space-between;
            margin-top: 80px;
            padding: 10px;
        }
      
        .demo-div{
            background-color: lightsteelblue;
        }

        .btn {
            padding: 10px;
            margin-top: 20px;
            background-color: lightcoral;
            border-radius: 10px;
            border: none;
        }

        a {
            color: black;
            text-decoration: none;
            font-size: 30px;
            font-weight: bold;
        }

        .hero {
            color: limegreen;
        }

        select {
            font-size: 20px;
            background-color: lightgreen;
        }

        table,
        tr,
        td,
        th {
            border: 2px solid black;
            width: 500px;
            height: 50px;
            text-align: center;
        }

        p {
            background-color: lightsalmon;
            width: 40%;
            padding: 10px;
            font-size: 30px;
        }

        .btn-2 {
            background-color: lightgreen;
            padding: 5px;
        }
    </style>


</head>

<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location:index.php");
};
$u_name = $_SESSION['name'];

if (isset($_POST['delete'])) :
    $student = $_POST['student'];
    $db->query("DELETE FROM student WHERE id = '$student'");
    if ($db->affected_rows) {
        echo " <p> data has been deleted <p> ";
    }
endif;

?>

<body>
    <div class="div_1">
        <div>
            <h1>Welcome <span class="hero"> Mr. <?php echo $u_name  ?> </span> to Goriber Dashboard </h1>

<div class="demo-div"> 
            <div class="div_2">
                <form action="" method="post">

                    <select name="student">
                        <option value=""> select One </option>

                        <?php
                        $result = $db->query("SELECT * FROM student");
                        while ($data = $result->fetch_assoc()) :
                        ?>

                            <option value=" <?php echo $data['id'] ?> "> <?php echo $data['name'] ?> </option>
                        <?php endwhile; ?>

                    </select>

                    <input type="submit" name="delete" value="DELETE">

                </form>

                <button class="btn-2"> <a href="entry.php"> Enter Students </a> </button>
            </div>

            <div class="div_3">

                <h3> Students Info </h3>
                <table>
                    <tr>
                        <th>SL</th>
                        <th> Name </th>
                        <th>Address </th>
                        <th> Module Name </th>
                        <th> Total Mark </th>
                    </tr>

                    <?php

                    $sql = "SELECT * FROM students_info";
                    $result = $db->query($sql);
                    $sl = 1;
                    while ($data = $result->fetch_assoc()) :

                    ?>

                        <tr>
                            <td> <?php echo $sl;
                                    $sl++; ?> </td>
                            <td> <?php echo  $data['name']; ?> </td>
                            <td> <?php echo  $data['adress']; ?> </td>
                            <td> <?php echo  $data['module_name']; ?> </td>
                            <td> <?php echo  $data['total_mark']; ?> </td>
                        </tr>


                    <?php endwhile; ?>
                </table>

            </div>
 </div>
        </div>

        <div><button class="btn"> <a href="logout.php">Logout</a> </button></div>
    </div>




</body>

</html>