<?php 
    $db = new mysqli("localhost", "root", "", "isdb_bisew");
    if(isset($_REQUEST['login'])) :
        extract($_REQUEST);
        $pass = sha1($password);
        
        $sql = "SELECT Name, Email, Password FROM users WHERE Email='$email' AND Password = '$pass'";
        $result = $db->query($sql);
        $row = $result->fetch_object();

        session_start();
        if($result->num_rows){
            $_SESSION['name'] = $row->Name ;
            $_SESSION['email'] = $row->Email ;
            header("Location:student_result_list.php");
        } else {
            $_SESSION['err'] = "Your email and password not stored in database";
            header("Location:index.php");
        }
    endif;

?>