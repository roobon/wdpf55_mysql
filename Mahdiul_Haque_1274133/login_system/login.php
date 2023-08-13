<?php 


   if(isset($_POST['submit'])){
     $_email = $_POST['email'];
     $password = $_POST['password'];
    //  $password = sha1($password);
   
      require_once("db_config.php"); // connection db file
      
      $sql = "SELECT name, email, password FROM users WHERE email='$email' AND password = '$password'";
      $result = $db->query($sql);
    
      $row = $result->fetch_assoc();
      session_start();
      
       if($result->num_rows){
         $_SESSION['myname'] = $row['name'];
         $_SESSION['myemail'] = $row['email'];
         header("Location: home.php");
       } else {
        $_SESSION['error'] = "Email and password is not stored in the database";
         header("Location: index.php");
       }
   }


















?>