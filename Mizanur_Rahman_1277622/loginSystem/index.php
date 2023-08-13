<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>login Form</title>
</head>

<body>
    <div class="container">
        <h2>Login Form</h2>
        <?php
        session_start();
        if (isset($_SESSION["error"])) {
            echo $_SESSION["error"];
            unset($_SESSION["error"]);
        }
        ?>
        <div class="d-flex justify-content-center">
            <form action="login.php" method="post" class="form-control">
                <div class="col-md-4">
                    <input type="email" name="email" placeholder="Enter your email" class="form-control col-md-4">
                </div>
                <div class="col-md-4">
                    <input type="password" name="password" placeholder="Enter your password" class="form-control">
                </div>
                <input type="submit" value="LOGIN" name="submit" class="btn btn-dark">
            </form>
        </div>
    </div>
</body>

</html>