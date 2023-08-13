<?php 

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $pass = sha1($pass); // encrepted

        require_once("db_confiq.php");

        $sql = "SELECT Name, Email, Password FROM users2 WHERE Email='$email' AND Password='$pass'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        session_start();

        if($result->num_rows){
            $_SESSION['name'] = $row['Name'];
            $_SESSION['email'] = $row['Email'];
            header("Location: home.php");
        } else {
            $_SESSION['error'] = "Email and password is not stored in database";
            header("Location: index.php");
        }

        // echo "Your Email: $email<br>";
        // echo "Your Password: $pass<br>";
    }

?>