<?php 
    if(isset($_POST['submit'])){
        require_once("db_config.php");

        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = sha1($password);

        $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";  // this is enough for only login. After HIT the login button, the url will converted (index.php into login.php). 
        
        $result = $db->query($sql);
        $row = $result->fetch_object();

        if($result->num_rows)

    }
    
?>
 