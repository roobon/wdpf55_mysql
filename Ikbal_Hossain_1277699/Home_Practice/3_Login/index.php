<?php
if (isset($_POST["submit"])) {
    require_once("db_config.php");
    extract($_POST);
    $pass = sha1("$password");
    echo "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
    // $result = $db->query($sql);

    // if ($result->num_rows) {
    //     header("Location: home.php");
    // }
    // else{
    //     echo "incorrect pass";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 m-auto d-block">

                <h1 class="text-center">Login Form</h1> <br>
                <div style="background-color: gray; width: 500px;">
                    <br>
                    <div class="text-center">
                        <label for=""> username </label>
                        <input type="text" name="username" required>
                    </div> <br>
                    <div class="text-center">
                        <label for=""> password </label>
                        <input type="password" name="password" required>
                    </div> <br>
                    <div class="text-center">
                        <input type="submit" value="Login" class="m-3">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>