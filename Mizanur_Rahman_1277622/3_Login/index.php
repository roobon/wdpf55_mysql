<?php
$db = new mysqli("localhost", "root", "", "ikbal");
if (isset($_REQUEST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    //extract($_POST);

    //require_once("db_config.php");
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $result = $db->query($sql);

    if ($result->num_rows) {
        header("Location: home.php");
    } else {
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index Page</title>
</head>

<body>
    <!-- step: 1 create a login table -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4  m-auto d-block">
                <form action="home.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password-" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <!-- name missing on button -->
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>