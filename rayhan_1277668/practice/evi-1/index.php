<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    p {
        background-color: lightsalmon ;
        width: 40%;
        padding: 10px;
        font-size: 30px;
    }
    body {
        /* display: flex;
        justify-content: center; */
        text-align: center;
    }
    </style>
</head>
<body>

<?php 
session_start();

if ( isset( $_SESSION['error'] )  ) {
    echo $_SESSION['error'] ;
    unset( $_SESSION['error']) ;
}



?>

<div>
<h2>  Please Log in To Gain Full Access To Dashboard </h2>

<form action="login.php" method="post">
    <input type="text" name="name" placeholder="User Name"> <br>
    <input type="email" name="email" placeholder="Email"> <br>
    <input type="password" name="password" placeholder="Password"> <br> <br>
    <input type="submit" name="submit" value="LOGIN"> <br> 

    <a href="newUser.php"> New user ? please sign In </a>
    
    


</form>

</div>
</body>
</html>