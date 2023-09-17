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
    <title>Log In Page</title>
</head>

<body>

    <div class="container">
        <div class="mb-2 d-flex justify-content-center">
            <h2>Login Form</h2>
        </div>
        
        <div class="container d-flex justify-content-center">
            <?php 
                session_start();
                if (isset($_SESSION["error"])) {
                    echo $_SESSION["error"];
                    unset($_SESSION["error"]);
                }
            ?>
        </div>
        

        <div class="d-flex justify-content-center">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <input type="email" name="email" placeholder="Enter your email" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="SUBMIT" name="submit" class="btn btn-outline-dark">
                    <a href="index.php" class="btn btn-outline-warning">RESET</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>