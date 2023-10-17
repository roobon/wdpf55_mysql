<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
    
<body>
<div class="container mt-5 w-25"> 
    <h3> Login Form </h3>

    <?php 
        session_start(); 
       // echo $_SESSION['error_msg']; // if you write only this without if(isset($_SESSION['error_msg'])) then Notice: Undefined index: error_msg in will show
       // session_destroy();  // if you don't set (session_destroy()) then the error message always show
       
       if(isset($_SESSION['error_msg'])){
            echo $_SESSION['error_msg'];
            session_destroy(); 
          // session_unset();
       }
        
    ?>    
</div>
    <form class="container mt-5 w-25" method="POST" action="login.php">
        <div class="mb-3">
            <label for="" class="form-label"><b>Email address</b></label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="" class="form-label"><b>Password</b></label>
            <input type="password" class="form-control" name="password">
        </div>

        <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label" name="remember">Remember me</label>
        </div> -->

        <button type="submit" class="btn btn-primary" name="submit">Login</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
