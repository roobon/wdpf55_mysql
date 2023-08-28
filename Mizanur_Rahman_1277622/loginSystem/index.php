<?php require_once("db_config.php") ?>
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
    <div class="container" style="text-align: center; margin-top: 120px; width: 400px;">
        <?php
        session_start();
        if (isset($_SESSION["error"])) {
            echo $_SESSION["error"];
            unset($_SESSION["error"]);
        }
        ?>
        <div>
            <form action="login.php" method="post" class="form-control p-3">
                <h2>Login Form</h2>
                <div>
                    <!-- Email Input -->
                    <div>
                        <input type="email" name="email" placeholder="Enter your email" class="form-control mb-2">
                    </div>
                    <!-- Password Input -->
                    <div>
                        <input type="password" name="password" placeholder="Enter your password" class="form-control">
                    </div>
                </div>
                <!-- Submit Button -->
                <input type="submit" value="LOGIN" name="submit" class="btn btn-dark mt-4">
            </form>
        </div>
    </div>
</body>

</html>