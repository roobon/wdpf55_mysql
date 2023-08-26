<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> New Student Entry </h3>

    <?php 
        if(isset($_POST['submit'])){
            extract($_POST);
            // print_r($hobby);
            $hobbies = implode(',', $hobby);
            $sql = "CALL insert_studentinfo('$name', '$gender', '$dob', '$email', '$batch', '$address', '$hobbies')";

            //  $sql = "INSERT INTO students VALUES(NULL, '$name', '$gender', '$dob', '$email', '$batch', '$address', '$hobbies')";

            $db -> query($sql);

            if($db -> affected_rows > 0){
                header("Location: index.php");
            }
        }
    ?>

    
</body>
</html>