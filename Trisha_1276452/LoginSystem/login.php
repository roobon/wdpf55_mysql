<?php 
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    require_once("db_config.php");

    $sql = "SELECT Name,Email, Password FORM users WHERE Email= '$email' AND Password = '$pass'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    session_start();
    
    if($result->num_rows){
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['email'] = $row['email'];
         header("Location:home.php");
     }else {
        $_SESSION['error']= "Email and password is not stored in database";
        header("Location:index.php");
     }

}

?>