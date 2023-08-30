<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <style>
        p {
            background-color: lightsalmon;
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
    // session_start();

    $db = new mysqli("localhost", "root", "", "auth_users");

    if (isset($_POST['submit'])) {
        extract($_POST);

        $sql = " INSERT INTO users2 VALUES (  '$name', '$email', '$password' ) ";

        $db->query($sql);

        if ($db->affected_rows>0) {
            session_start();
            $_SESSION['name'] = $name ;
            echo " sign in successfull " ;
            header("Location:dashboard.php");
        } else {
            echo "<p> Sign In Failed </p>" ;
        }
    }

    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }


    ?>



    <div>
        <h2> New user ? Please Create an Account </h2>

        <form action="" method="post">
            <input type="text" name="name" placeholder="User Name"> <br>
            <input type="email" name="email" placeholder="Email"> <br>
            <input type="password" name="password" placeholder="Password"> <br> <br>
            <input type="submit" name="submit" value="SIGN IN"> <br>

            <a href="index.php"> Already have an accout ? please Log In </a>




        </form>

    </div>
</body>

</html>