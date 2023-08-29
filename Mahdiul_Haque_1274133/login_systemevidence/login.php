<?php 
     
     if(isset($_REQUEST['login'])) {
          extract($_REQUEST);
          $pass = ($password);
          require_once("db_config.php");
          $sql = "SELECT name, email, password FROM user WHERE email='$email' AND password = '$pass'";
          $result = $db->query($sql);
          $row = $result->fetch_object();


          session_start();
          if ($result->num_rows)  {
               $_SESSION['name'] = $row->name;
               $_SESSION['email'] = $row->email;
               header("Location: home.php");
          } else {
               $_SESSION['err'] = "Your email and password not stored in database";
               header("Location: index.php");
          }
     }


?>