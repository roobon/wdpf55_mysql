<?php 
    if(isset($_POST['submit'])){
        require_once("db_config.php");

        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = sha1($password);

        $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";  // this is enough for only login. After HIT the login button, the url will converted (index.php into login.php). 
        
        // [$result = $db->query($sql);
        // if($result->num_rows){
        //     echo "Successfully Login";
        // } else {
        //     echo "Email or Password doesn't match";
        // }

        //] upto this is only for checking echo message. and After HIT the login button, the url will converted (index.php into login.php). 
        
        # for generating session
        $result = $db->query($sql);
        $row = $result->fetch_object();

        session_start();
        if($result->num_rows>0){
            $_SESSION['myname'] = $row->user_name;
            $_SESSION['myemail'] = $row->user_email;
            header("Location: home.php");
        } else {
            $_SESSION['error_msg'] = "Email and Password is not stored in the database";
            header("Location: index.php");
        }

    }
?>